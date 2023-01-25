<?php
class Person
{
    // Define properties in class
    var $name;
    var $address;
    var $country;

    /*
    Tanda ? pada awal string mengindikasikan bahwa variabel tersebut bisa diisi dengan null (nullable)
    */
    public function __construct(string $name, ?string $address, ?string $country)
    {
        $this->name = $name;
        $this->address = $address;
        $this->country = $country;
    }

    public function sayHello()
    {
        echo 'Halo ' . $this->name . ' in ' . $this->country;
    }

    public function __destruct()
    {
        echo 'This object has been deleted';
    }
}

$joko = new Person('Joko', 'Jalan Saguling', 'Nigeria');

echo 'Program Selesai' . PHP_EOL;
