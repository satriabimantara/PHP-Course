<?php
require_once 'Programmer.php';

$company = new Company();
$company->programmer = new Programmer('Satria');
var_dump($company);
$company->programmer = new BackendProgrammer('Satria');
var_dump($company);
$company->programmer = new FrontendProgrammer('Satria');
var_dump($company);

sayHelloProgrammer(new BackendProgrammer('Budi'));
