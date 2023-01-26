<?php
require_once "../Helper.php";

$connection = getConnection();

// ambil input data dari user
$username = 'bimbim';
$password = 'admin';

// SQL
$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";

$results = $connection->prepare($sql);
$results->bindParam('username', $username);
$results->bindParam('password', $password);
$results->execute();

// tutup koneksi
$connection = null;
