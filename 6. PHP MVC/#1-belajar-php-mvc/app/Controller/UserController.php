<?php

namespace Satriabimantara\BelajarPhpMvc\Controller;

use Satriabimantara\BelajarPhpMvc\App\ViewRender;

class UserController
{
    public function login()
    {
        $model = [
            "title_page" => "Login User",
            "page_content" => "Silahkan Login"
        ];
        ViewRender::render('User/login', $model);

        if (isset($_POST['btnLogin'])) {
            // retrieve data dari database mencocokan username dan password
            // misal data dummy
            if ($_POST['username'] == "root" && $_POST['password'] == "123") {
                session_start();
                $_SESSION['user'] = [
                    "username" => $_POST['username'],
                    "password" => $_POST['password']
                ];
                header('Location: /');
                exit();
            }
            header('Location: /login');
        }
    }
    public function logout()
    {
        $model = [
            "title_page" => "Logout User",
            "page_content" => "Silahkan Logout"
        ];
        ViewRender::render('User/logout', $model);
        if (isset($_POST['btnLogout'])) {
            session_start();
            session_destroy();
            header('Location: /login');
            exit();
        }
    }
}
