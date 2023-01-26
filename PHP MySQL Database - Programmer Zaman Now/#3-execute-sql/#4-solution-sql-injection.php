<?php
require_once "../Helper.php";

$connection = getConnection();

// contoh sample query agar terhindar dari SQL injection
$username = $connection->quote("admin'; #");
$password = $connection->quote('satria12345');
$sql_non_sql_injection = "SELECT * FROM admin WHERE username=$username AND password=$password;";

// prepare SQL query exec


// execute query
$sql = $sql_non_sql_injection;
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
