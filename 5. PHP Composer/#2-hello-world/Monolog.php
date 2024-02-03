<?php
require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Menambahkan log ke dalam suatu file
$log = new Logger("SatriaBimantara");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info('Contoh pesan logging1');
