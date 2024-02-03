<?php
require_once __DIR__ . '/vendor/autoload.php';

// Load class People dari src
use Satriabimantara\ComposerHelloWorld\Data\People;

$people = new People("Satria Bimantara", 12);

echo 'Hello World Composer' . PHP_EOL;
echo $people->sayHello('Budi');
