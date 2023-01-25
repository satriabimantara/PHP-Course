<?php
require_once 'data/Conflict.php';
require_once 'data/Helper.php';

// instansiasi objek dari namespace
$conflict_data_1 = new \Data\One\Conflict();
$conflict_data_2 = new \Data\Two\Conflict();


// mengakses function dan constanta dari namespace
echo Helper\APP_VERSION;
Helper\helpMe();
