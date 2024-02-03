<?php
function getConnection()
{
    // koneksi ke database define host, dll
    $host = 'localhost';
    $port = 3306;
    $database = "belajar_php_mysql_database";
    $username = 'root';
    $password = "satria12345";
    $connection = null;
    try {
        // Koneksi ke database MySQL dengan PDO
        $connection = new PDO(
            "mysql:host=$host:$port;dbname=$database",
            $username,
            $password
        );
    } catch (PDOException $exception) {
        //throw $th;
        echo 'Gagal terkoneksi ke database MySQL: ' . $exception->getMessage();
    }
    return $connection;
}
