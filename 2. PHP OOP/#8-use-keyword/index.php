<?php
/*
Use keyword digunakan untuk membantu programmer ketika malas menuliskan nama namespace yang berulang kali
*/
require_once 'data/Conflict.php';
require_once 'data/Helper.php';

// Gunakan alias 'as' untuk kelas yang sama agar tidak terjadi bentrok
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APP_VERSION as APP;

echo APP;

// instansiasi object dari kelas yang sudah diberi alias
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

var_dump($conflict1);
