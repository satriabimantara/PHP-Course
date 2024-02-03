<?php
class Car
{
    var $name;
    var $type;
    var $cc;

    function sayHello(string $name)
    {
        echo "Hello car {$name}";
    }
}
