<?php

namespace Satriabimantara\BelajarPhpMvc\Middleware;

class LoginAuthMiddleware implements Middleware
{
    function before(): void
    {
        // cek apakah ada session user login
        session_start();
        if (!isset($_SESSION['user'])) {
            // redirect ke halaman login
            header('Location: /login');
            exit();
        }
    }
}
