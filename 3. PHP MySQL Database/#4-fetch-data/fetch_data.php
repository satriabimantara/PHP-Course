<?php
require_once "../Helper.php";

$connection = getConnection();

/*
Fetch digunakan untuk mengambil data pertama dari PDO statement return results tanpa harus menggunakan foreach looping satu persatu
 */

$username = 'bimbim';
$password = 'admin';

$sql = "SELECT * FROM admin WHERE username=? AND password=?";

$results = $connection->prepare($sql);
$results->execute([$username, $password]);

if ($row = $results->fetch()) {
    echo 'Sukses login: ' . $row['username'] . PHP_EOL;
} else {
    echo 'Gagal login!';
}


$connection = null;
