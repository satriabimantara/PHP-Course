<?php
function sayHello($firstName, callable $filter)
{
    $name = call_user_func($filter, $firstName);
    echo "Halo $name \n";
};

sayHello("Satria", fn ($name) => strtoupper($name));
sayHello("Satria", function (string $name) {
    return strtoupper($name);
});
sayHello("Satria", "strtoupper");
sayHello("Satria", "strtolower");
