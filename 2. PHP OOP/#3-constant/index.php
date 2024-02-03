<?php
require_once 'Constant.php';


// define a constant variable
define('APP_NAME', 'Belajar OOP PHP');
const APP_VERSION = '1.0.0';


echo APP_VERSION . PHP_EOL;

// Akses constant variable di Class
$const = new Constant();
echo $const->info();
