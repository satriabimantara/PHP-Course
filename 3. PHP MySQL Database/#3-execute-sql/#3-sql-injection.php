<?php
require_once "../Helper.php";

$connection = getConnection();


// Run Query
// $sql = <<<SQL
//     SELECT * FROM admin;
// SQL;

// contoh sample query yang bisa dikenai SQL injection
$username = "admin'; #";
$password = 'satria12345';
$sql_injection_example = "SELECT * FROM admin WHERE username='$username' AND password='$password';";


// execute query
$sql = $sql_injection_example;
$results = $connection->query($sql);

// Coba lihat apakah ada user yang berhasil diretrieve dari database
$success = false;
$find_user = null;
foreach ($results as $row) {
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo 'Sukses login: ' . $find_user . PHP_EOL;
} else {
    echo 'Gagal login!';
}

// tutup koneksi database

$connection = null;
