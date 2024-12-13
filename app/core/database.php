<?php

namespace Core;

use Exception;

class Database
{
    private $connection;

    public function __construct()
    {
        $this->connect(); // Memanggil koneksi saat objek dibuat
    }

    public function connect()
    {
        // Menyiapkan informasi koneksi
        $connectionInfo = [
            "Database" => DB_NAME,
            "UID" => DB_USER,
            "PWD" => DB_PASS,
            "CharacterSet" => "UTF-8"
        ];

        try {
            // Mencoba membuat koneksi
            $this->connection = sqlsrv_connect(DB_HOST, $connectionInfo);

            if ($this->connection === false) {
                throw new Exception("Database connection failed: " . $this->getLastError());
            }
        } catch (Exception $e) {
            // Jika koneksi gagal, log dan lemparkan error
            error_log($e->getMessage());
            throw $e;
        }
    }

    public function query($sql)
    {
        $stmt = sqlsrv_query($this->connection, $sql);

        if ($stmt === false) {
            throw new Exception("Query execution failed: " . $this->getLastError());
        }

        return $stmt;
    }

    public function prepareAndExecute($sql, $params)
    {
        $stmt = sqlsrv_prepare($this->connection, $sql, $params);

        if ($stmt === false) {
            throw new Exception("Statement preparation failed: " . $this->getLastError());
        }

        if (!sqlsrv_execute($stmt)) {
            throw new Exception("Statement execution failed: " . $this->getLastError());
        }

        return $stmt;
    }

    public function fetchAll($stmt)
    {
        $results = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $results[] = $row;
        }
        return $results;
    }

    public function getLastError()
    {
        // Mendapatkan error terakhir
        $errors = sqlsrv_errors(SQLSRV_ERR_ALL);
        return $errors ? json_encode($errors) : "Unknown error";
    }

    public function close()
    {
        // Menutup koneksi jika ada
        if ($this->connection) {
            sqlsrv_close($this->connection);
        }
    }

    public function __destruct()
    {
        // Menutup koneksi ketika objek dihancurkan
        $this->close();
    }

    public function getConnection()
    {
        return $this->connection;  // Mengembalikan koneksi untuk digunakan di tempat lain
    }
}
