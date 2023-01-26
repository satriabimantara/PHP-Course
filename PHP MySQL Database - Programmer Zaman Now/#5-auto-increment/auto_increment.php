<?php

require_once "../Helper.php";

$connection = getConnection();

// dummy data ambil dari user
$email = 'budi23@gmail.com';
$comment = 'Hello duni world';

// insert data ke Table comment lalu ambil last ID dari data terakhir yang sudah dimasukkan
$sql_insert = "INSERT INTO comments (email, comment) VALUES (?,?)";
$prepare_statement = $connection->prepare($sql_insert);
$prepare_statement->execute([$email, $comment]);
$last_insert_id = $connection->lastInsertId();

// tampilkan ke console
var_dump($last_insert_id);

// tutup koneksi
$connection = null;
