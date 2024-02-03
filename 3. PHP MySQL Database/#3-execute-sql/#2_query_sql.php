<?php
require_once "../Helper.php";

$connection = getConnection();

// Run Query
$sql = <<<SQL
    SELECT * FROM customers;
SQL;

// execute query
$results = $connection->query($sql);

// tampilkan data
foreach ($results as $row) {
    var_dump($row);
}

// tutup koneksi
$connection = null;
