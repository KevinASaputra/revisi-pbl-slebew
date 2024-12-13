<?php

namespace App;

class ErrorHandler
{
    // Menangani error 404
    public static function handle404()
    {
        // Mengatur kode status HTTP ke 404
        http_response_code(404);

        // Menyertakan halaman error 404
        include __DIR__ . '/../app/views/error/404.php';
        exit;
    }

    // Menangani error 500
    public static function handle500($message = 'Internal Server Error')
    {
        // Mengatur kode status HTTP ke 500
        http_response_code(500);

        // Log pesan error
        error_log($message);
    }
}
