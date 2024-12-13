<?php

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

// Perbaiki jalur untuk file .env
$dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));  // Mengarah ke direktori root
$dotenv->load();


// Database Configuration
define('DB_HOST', $_ENV['INSTANCE_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);