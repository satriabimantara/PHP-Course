<?php
require_once __DIR__ . "/vendor/autoload.php";

use Satriabimantara\ComposerHelloWorld\Data\People;

$people = new People("Satria Bimantara", 23);
echo $people->sayHello();
