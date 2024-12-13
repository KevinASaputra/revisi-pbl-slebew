<?php

namespace App\Models;

use Core\Database;
use Exception;

class DataPrestasi
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function fetchDropdownData()
    {
        $queries = [
            'mahasiswa' => "SELECT * FROM mahasiswa",
            'dosen' => "SELECT * FROM dospem",
            'peran_mhs' => "SELECT * FROM peran_mhs",
            'peran_dosen' => "SELECT * FROM peran_dosen",
            'juara' => "SELECT * FROM juara",
            'jenis' => "SELECT * FROM jenisKompetisi",
            'tingkat' => "SELECT * FROM tingkatKompetisi"
        ];

        $data = [];

        foreach($queries as $key => $sql){
            $stmt = $this->db->query($sql);
            $data[$key] = $this->db->fetchAll($stmt);            
        }

        return $data;
    }

    public function getPrestasiById($id)
    {
        try {
            $sql = "CALL sp_get_prestasi_by_id(?);";
            $stmt = $this->db->prepareAndExecute($sql, [$id]);

            return $this->db->fetchAll($stmt);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return null;
        }
    }

    public function savePrestasi($data)
    {
        $this->validatePrestasi($data);

        try {
            $id_prestasi = $this->insertPrestasi($data);
            $this->insertMahasiswaRelation($id_prestasi, $data['mahasiswa']);
            $this->insertDospemRelation($id_prestasi, $data['dosen']);
            return $id_prestasi;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return null;
        }
    }

    private function validatePrestasi($data)
    {
        $requiredFields = [
            'judul_kompetisi',
            'penyelenggara',
            'tanggal_mulai',
            'tanggal_selesai',
            'juara_kompetisi',
            'jenis_kompetisi',
            'tingkat_kompetisi',
            'surat_tugas',
            'sertifikat',
            'foto_kegiatan',
            'poster',
            'url_kompetisi',
            'jumlah_peserta',
            'jumlah_pt',
            'nomor_surat_tugas',
            'tanggal_surat_tugas'
        ];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                throw new Exception("Field '$field' tidak ada.");
            }
        }
    }

    private function insertPrestasi($data)
    {
        try {
            $id_prestasi = 0;
            $sql = "DECLARE @id INT EXEC @id = sp_insert_prestasi ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?";
            $params = [
                $data['judul_kompetisi'],
                $data['penyelenggara'],
                $data['tanggal_mulai'],
                $data['tanggal_selesai'],
                $data['juara_kompetisi'],
                $data['jenis_kompetisi'],
                $data['tingkat_kompetisi'],
                $this->handleFileUpload($data, 'surat_tugas'),
                $this->handleFileUpload($data, 'sertifikat'),
                $this->handleFileUpload($data, 'foto_kegiatan'),
                $this->handleFileUpload($data, 'poster'),
                $data['url_kompetisi'],
                $data['jumlah_peserta'],
                $data['jumlah_pt'],
                $data['tanggal_surat_tugas'],
                $data['nomor_surat_tugas'],
                [&$id_prestasi, SQLSRV_PARAM_OUT]
            ];

            $stmt = $this->db->prepareAndExecute($sql, $params);
            

            return $id_prestasi;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return null;
        }
    }

    public function insertMahasiswaRelation(int $id_prestasi, array $mahasiswaData)
    {
        foreach ($mahasiswaData as $data) {
            try {
                $sql = "CALL sp_insert_prestasi_mhs(?, ?);";
                $params = [$data['id_mahasiswa'], $id_prestasi, $data['peran']];
                $stmt = $this->db->prepareAndExecute($sql, $params);
            } catch (Exception $e) {
                error_log($e->getMessage());
            }
        }
    }

    public function insertDospemRelation(int $id_prestasi, array $dospemData)
    {
        foreach ($dospemData as $data) {
            try {
                $sql = "CALL sp_insert_prestasi_dospem(?, ?, ?);";
                $params = [ $id_prestasi, $data['id_dospem'], $data['peran']];
                $stmt = $this->db->prepareAndExecute($sql, $params);
            } catch (Exception $e) {
                error_log($e->getMessage());
            }
        }
    }

    private function handleFileUpload(array $data, string $field): ?array
    {
        if (isset($data[$field]) && $data[$field]['error'] === UPLOAD_ERR_OK) {
            return [
                file_get_contents($data[$field]['tmp_name']),
                SQLSRV_PARAM_IN,
                SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY),
                SQLSRV_SQLTYPE_VARBINARY('max')
            ];
        }
        return null;
    }
}
