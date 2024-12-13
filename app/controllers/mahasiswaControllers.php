<?php

namespace App\Controllers;

use App\Models\User;

use Exception;

class MahasiswaController extends AuthController
{
    public function __construct()
    {
        $this->checkAuthorization('mahasiswa');
    }

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        require_once __DIR__ . '/../views/mahasiswa/beranda.php';
    }

    public function prestasi()
    {
        // Implement prestasi logic
        require_once __DIR__ . '/../views/mahasiswa/submisi.php';
    }

    public function riwayat()
    {
        // Implement riwayat logic
        require_once __DIR__ . '/../views/mahasiswa/riwayat.php';
    }

    public function changePassword()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $identifier = $_SESSION['user']['identifier'];

                $currentPassword = $_POST['password_lama'] ?? '';
                $newPassword = $_POST['password_baru'] ?? '';
                $confirmPassword = $_POST['password_baru_konfirmasi'] ?? '';

                $userModel = new User();
                $result = $userModel->updatePassword($identifier, $currentPassword, $newPassword, $confirmPassword);

                $_SESSION['message'] = [
                    'type' => 'succes',
                    'text' => 'Password berhasil diubah'
                ];

                header("Location: /mahasiswa");
                exit;
            } catch (Exception $e) {
                $_SESSION['message'] = [
                    'type' => 'error',
                    'text' => $e->getMessage()
                ];

                header("Location: /mahasiswa");
                exit;
            }
        }
    }
}