<?php


use App\Controllers\AuthController;
use App\Controllers\AdminController;
use App\Controllers\MahasiswaController;

// Periksa apakah router telah diberikan, jika tidak, lakukan error handling
if (!isset($router)) {
  throw new Exception('Router object is not passed to routeRoot.php');
}

// Rute untuk admin
$router->get('/admin', [AdminControllers::class, 'index']);
$router->get('/admin/dashboard', [AdminControllers::class, 'dashboard']);
$router->get('/admin/master-mahasiswa', [AdminControllers::class, 'masterMahasiswa']);

// Rute untuk login dan logout
$router->get('/login', [AuthControllers::class, 'showLoginForm']);
$router->post('/login', [AuthControllers::class, 'login']);
$router->get('/logout', [AuthControllers::class, 'logout']);

// Rute untuk mahasiswa
$router->get('/mahasiswa', [MahasiswaController::class, 'index']);
$router->get('/mahasiswa/beranda', [MahasiswaController::class, 'dashboard']);
$router->get('/mahasiswa/submisi', [MahasiswaController::class, 'prestasi']);
$router->get('/mahasiswa/riwayat', [MahasiswaController::class, 'riwayat']);


