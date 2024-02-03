<?php
require_once "../Helper.php";

$connection = getConnection();

// Run Query
$sql = <<<SQL
    INSERT INTO customers(id,name, email) VALUES('budiman', 'Budiman Sudiatmiko', 'budiman@gmail.com');
SQL;

$connection->exec($sql);
$connection = null;
