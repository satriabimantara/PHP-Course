<?php
require_once __DIR__ . "/vendor/autoload.php";

use Faker\Factory;
// use the factory to create a Faker\Generator instance
$faker = Factory::create();

// generate data by calling methods
echo $faker->name() . PHP_EOL;
// 'Vince Sporer'
echo $faker->email() . PHP_EOL;
// 'walter.sophia@hotmail.com'
echo $faker->text() . PHP_EOL;
