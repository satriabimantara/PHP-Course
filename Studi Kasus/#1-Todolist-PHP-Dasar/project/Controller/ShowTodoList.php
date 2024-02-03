<?php
function showToDolist()
{
    global $todolist;
    echo "APLIKASI TO DO LIST " . PHP_EOL;
    foreach ($todolist as $key => $value) {
        echo $key . ". " . $value . PHP_EOL;
    }
}
