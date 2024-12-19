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

// Initialize Router and App
$router = new Router(); // Pindahkan instansiasi Router ke atas
$app = new App($router);

// Memasukkan file rute setelah Router diinstansiasi
require_once '../app/core/Router.php';
require_once '../app/core/databaseConnection.php';
require_once '../app/routes/routeRoot.php';

// Mengatur rute dengan memanggil fungsi setUpRoutes
setUpRoutes($router); // Pastikan fungsi ini ada di routeRoot.php

try {
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