<?php
require_once "../Helper.php";


$connection = getConnection();

/*
Transaction in PDO:
beginTransaction()
commit()
rollBack()
*/

// contoh simple transaction
$sql = <<<SQL
INSERT INTO comments(email, comment) VALUES ('budi@gmail.com', 'this is comments');
SQL;
$connection->beginTransaction();

$connection->exec($sql);
$connection->exec($sql);
$connection->exec($sql);
$connection->exec($sql);

$connection->commit();
// membatalkan transaksi
// $connection->rollBack();

$connection = null;
