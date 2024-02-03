<?php

namespace Satriabimantara\BelajarPhpMvc\Controller;

use Satriabimantara\BelajarPhpMvc\App\ViewRender;

class HomeController
{

    public function index()
    {
        // create data model dummy for simplicity
        $model = [
            "title_page" => "Belajar MVC",
            "page_content" => "Selamat datang di website satria bimantara"
        ];
        ViewRender::render("Home/index", $model);
    }
    public function hello()
    {
        // check session user login
        var_dump($_SESSION['user']);
        echo "HomeController.hello()";
    }
    public function world()
    {
        echo "HomeController.world()";
    }
}
