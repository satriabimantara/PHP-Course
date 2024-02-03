<?php

class Manager
{
    var $name;
    var $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }
    public function sayHello($name)
    {
        echo 'Hello {$name}. Your {$this->title} are {$this->name}';
    }
}
class VicePrecident extends Manager
{
    public function __construct(string $name = "")
    {
        // akses parent constructor dulu kalau mau mengoveriding constructor child class
        parent::__construct($name, 'VP');
    }
    // overriding method
    public function sayHello($name)
    {
        echo "Hello {$name}. Your {$this->title} are {$this->name}. This is from VP Class";
    }
}
