<?php

namespace Core;

use App\Controllers\AuthController;
use App\ErrorHandler;

class App
{
    protected $router;
    protected $dbConnection;  // Properti untuk koneksi database

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    // Menambahkan metode untuk menyimpan koneksi database
    public function setDbConnection($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    // Menambahkan metode untuk mengambil koneksi database
    public function getDbConnection()
    {
        return $this->dbConnection;
    }

    public function run()
    {
        // Ensure session is started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Set up a default not found handler
        $this->router->setNotFoundHandler(function() {
            ErrorHandler::handle404();
        });

        // Load routes by passing the router
        $this->loadRoutes($this->router);

        // Dispatch the current request
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        
        $this->router->dispatch($uri, $method);
    }

    private function loadRoutes($router)
    {
      require_once __DIR__ . '/../routes/routeRoot.php';
    }
}
