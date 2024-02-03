<?php
require_once "../Helper.php";

$connection = getConnection();

// Ambil input data dari user
$username = "admin";
$password = "admin";

// query dengan prepare statement lebih aman dari quote
$sql = "SELECT * FROM admin WHERE username= :username AND password = :password";

// prepare SQL query exec
$prepare_statement = $connection->prepare($sql);
$prepare_statement->bindParam('username', $username);
$prepare_statement->bindParam('password', $password);
$prepare_statement->execute();

// bind parameter dengan index
// $sql_1 = "SELECT * FROM admin WHERE username= ? AND password = ?";
// $prepare_statement_1 = $connection->prepare($sql_1);
// $prepare_statement_1->bindParam(1, $username);
// $prepare_statement_1->bindParam(2, $password);
// $prepare_statement_1->execute();

// bind parameter ketika execute
//  $sql_2 = "SELECT * FROM admin WHERE username= ? AND password = ?";
// $prepare_statement_2 = $connection->prepare($sql_2);
// $prepare_statement_2->execute([$username, $password]);


// Coba lihat apakah ada user yang berhasil diretrieve dari database
$success = false;
$find_user = null;
foreach ($prepare_statement as $row) {
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
