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
        require_once "../app/views/mahasiswa/beranda.php";
    }

    public function submisi()
    {
        // Implement prestasi logic
        require_once "../app/views/mahasiswa/submisi.php";
    }

    public function riwayat()
    {
        // Implement riwayat logic
        require_once "../app/views/mahasiswa/riwayat.php";
    }

    public function changePassword()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Ambil data dari sesi dan input pengguna
                $identifier = $_SESSION['user']['identifier'] ?? null;
                $currentPassword = $_POST['password_lama'] ?? '';
                $newPassword = $_POST['password_baru'] ?? '';
                $confirmPassword = $_POST['password_baru_konfirmasi'] ?? '';

                // Validasi input dasar
                if (empty($identifier) || empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
                    throw new Exception('Semua kolom wajib diisi.');
                }

                if ($newPassword !== $confirmPassword) {
                    throw new Exception('Konfirmasi password baru tidak cocok.');
                }

                // Validasi dengan model User
                $userModel = new User();
                $isUpdated = $userModel->updatePassword($identifier, $currentPassword, $newPassword, $confirmPassword);

                if (!$isUpdated) {
                    throw new Exception('Password lama tidak cocok atau gagal memperbarui password.');
                }

                // Jika berhasil
                $_SESSION['message'] = [
                    'type' => 'success',
                    'text' => 'Password berhasil diubah.'
                ];

                header("Location: /mahasiswa");
                exit;
            } catch (Exception $e) {
                // Tangani kesalahan
                $_SESSION['message'] = [
                    'type' => 'error',
                    'text' => $e->getMessage()
                ];

                header("Location: /mahasiswa");
                exit;
            }
        }

        // Jika GET, arahkan kembali ke dashboard
        header("Location: /mahasiswa");
        exit;
    }
}
