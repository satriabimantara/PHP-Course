<?php
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    return $total;
}

echo sumAll(10, 20, 30, 40);
echo "\n";
echo sumAll(...[1, 2, 3, 4]);
