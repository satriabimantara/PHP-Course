<?php

namespace Satriabimantara\PhpUnitProject;


class Math
{
    public static function sum(array $array): int
    {
        $total = 0;
        foreach ($array as $key => $value) {
            $total += $value;
        }
        return $total;
    }
}
