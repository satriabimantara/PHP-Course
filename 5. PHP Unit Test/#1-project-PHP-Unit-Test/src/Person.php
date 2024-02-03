<?php

namespace Satriabimantara\PhpUnitProject;


class Person
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(?string $name)
    {
        if ($name == null) {
            throw new \Exception("Name is Null");
        }
        return "Halo $name, My Name is " . $this->name;
    }
    public function sayGoodBye(?string $name)
    {
        echo "Good Bye $name" . PHP_EOL;
    }
}
