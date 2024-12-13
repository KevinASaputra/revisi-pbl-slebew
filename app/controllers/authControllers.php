<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    protected function checkAuthorization($expectedType, $expectedRole = null)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        $user = $_SESSION['user'];

        // Validate user type
        if ($user['type'] !== $expectedType) {
            header("Location: /login");
            exit;
        }

        // Additional role check for admin
        if ($expectedRole !== null && $user['type'] === 'admin' && $user['role'] !== $expectedRole) {
            header("Location: /login");
            exit;
        }
    }

    public function showLoginForm()
    {
        if (isset($_SESSION['user'])) {
            $this->redirectBasedOnRole();
        }

        $this->render('login');
    }

    public function login()
    {
        $identifier = $_POST['identifier'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = new User();
        $authenticated = $user->authenticate($identifier, $password);

        if ($authenticated) {
            $this->redirectBasedOnRole();
        } else {
            $_SESSION['error'] = 'Invalid credentials';
            header("Location: /login");
            exit;
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        session_start();
        header("Location: /login");
        exit;
    }

    public function redirectBasedOnRole()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        $userType = $_SESSION['user']['type'] ?? null;
        $userRole = $_SESSION['user']['role'] ?? null;

        switch ($userType) {
            case 'mahasiswa':
                header("Location: /mahasiswa");
                break;
            case 'admin':
                if ($userRole == 1) {
                    header("Location: /admin");
                } elseif ($userRole == 2) {
                    header("Location: /kajur");
                } else {
                    header("Location: /login");
                }
                break;
            default:
                header("Location: /login");
        }
        exit;
    }

    // Helper function for rendering views
    protected function render($view, $data = [])
    {
        extract($data);
        include __DIR__ . "/../../resources/views/$view.php";
    }
}
