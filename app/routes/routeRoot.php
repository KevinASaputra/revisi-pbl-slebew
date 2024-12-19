<?php


use App\Controllers\AuthController;
use App\Controllers\AdminController;
use App\Controllers\MahasiswaController;

function setUpRoutes($router) {
  // Rute untuk login dan logout
  $router->get('/', [AuthController::class, 'redirect']);
  $router->get('/login', [AuthController::class, 'showLoginForm']);
  $router->post('/login', [AuthController::class, 'login']);
  $router->get('/logout', [AuthController::class, 'logout']);
  
  
  // Rute untuk admin
  $router->get('/admin', [AdminController::class, 'index']);
  $router->get('/admin/dashboard', [AdminController::class, 'dashboard']);
  $router->get('/admin/master-mahasiswa', [AdminController::class, 'masterMahasiswa']);
  
  
  // Rute untuk mahasiswa
  $router->get('/mahasiswa', [MahasiswaController::class, 'index']);
  $router->get('/mahasiswa/beranda', [MahasiswaController::class, 'dashboard']);
  $router->get('/mahasiswa/submisi', [MahasiswaController::class, 'submisi']);
  $router->get('/mahasiswa/riwayat', [MahasiswaController::class, 'riwayat']);
  $router->get('/mahasiswa/change-password', [MahasiswaController::class, 'changePassword']);
  $router->post('/mahasiswa/change-password', [MahasiswaController::class, 'changePassword']);
}



