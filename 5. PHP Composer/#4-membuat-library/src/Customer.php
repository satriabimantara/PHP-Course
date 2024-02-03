<?php

namespace Satriabimantara\LibraryComposer;

class Customer
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(string $name): string
    {
        return "Hello $name, My name is " . $this->name;
    }
}
