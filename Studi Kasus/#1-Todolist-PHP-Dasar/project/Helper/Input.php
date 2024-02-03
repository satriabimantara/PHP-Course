<?php

function input(string $info): string
{
    echo "$info :";
    $results = fgets(STDIN);
    return trim($results);
}
