<?php
$sayHello = function (string $name) {
    echo "Hello $name";
};

$sayHello("Satria");


$firstName = "Satria";
$lastName = "Bimantara";
$sayGoodBye = function () use ($firstName, $lastName) {
    echo "Good bye $firstName $lastName";
};

$sayGoodBye();
