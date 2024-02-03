<?php
require_once __DIR__ . "/vendor/autoload.php";

use Satriabimantara\CustomerLibrary\Customer;


$customer1 = new Customer("Budi");
echo $customer1->sayHello("Satria");
