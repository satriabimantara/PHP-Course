<?php
require_once 'class/Person.php';
$person = new Person();


// Manipulasi properties di kelas
$person->address = 'Jalan Pulau Bungin';
$person->name = 'Satria';

// Menampilkan properties
echo "Nama {$person->name}";
echo "Address {$person->address}";
