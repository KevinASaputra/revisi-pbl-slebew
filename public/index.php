<?php

// Autoload composer dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Import necessary classes
use Core\App;
use Core\Router;
use Core\Database;
use Dotenv\Dotenv;

// Load environment variables (optional, using vlucas/phpdotenv)
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Include core files
require_once __DIR__ . '/../app/core/databaseConnection.php';  // Pastikan path sudah benar
require_once __DIR__ . '/../app/controllers/authControllers.php';
require_once __DIR__ . '/../app/controllers/mahasiswaControllers.php';
require_once __DIR__ . '/../app/core/app.php';
require_once __DIR__ . '/../app/core/classRouters.php';
require_once __DIR__ . '/../app/core/database.php';  // Pastikan kelas Database terimpor dengan benar

try {
    // Initialize Router and App
    $router = new Router();
    $app = new App($router);

    // Create a database connection
    $database = new Database();
    $dbConnection = $database->getConnection(); // Mendapatkan koneksi DB

    // Pass database connection to the app if necessary
    $app->setDbConnection($dbConnection);

    // Run the application
    $app->run();
} catch (Exception $e) {
    // Global error handling
    die('Application Error: ' . $e->getMessage());
}
