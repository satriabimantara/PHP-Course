<?php

namespace Satriabimantara\ComposerHelloWorld\Data;

class People
{
    public function __construct(private string $name, private int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello()
    {
        return "Hello $this->name, $this->age years old";
    }
}
