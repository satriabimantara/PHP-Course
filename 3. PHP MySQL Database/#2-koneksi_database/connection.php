<?php
// koneksi ke database define host, dll
$host = 'localhost';
$port = 3306;
$database = "belajar_php_mysql_database";
$username = 'root';
$password = "satria12345";


try {
    // Koneksi ke database MySQL dengan PDO
    $connection = new PDO(
        "mysql:host=$host:$port;dbname=$database",
        $username,
        $password
    );
    echo 'Sukses terkoneksi ke database' . PHP_EOL;

    // menutup koneksi ke database
    $connection = null;
} catch (PDOException $exception) {
    //throw $th;
    echo 'Gagal terkoneksi ke database MySQL: ' . $exception->getMessage();
}
