<?php

namespace App\Controllers;

use App\Models\User;

class AdminController extends AuthController
{
    public function __construct()
    {
        $this->checkAuthorization('admin', 1);
    }

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        // Panggil view menggunakan method render
        $this->render('admin/beranda');
    }

    public function masterMahasiswa()
    {
        // Panggil view untuk halaman master mahasiswa
        $this->render('admin/masterMahasiswa');
    }
}
