<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Controller/AddTodoList.php";

function ViewAddTodoList()
{
    echo "Menambah TODO LIST" . PHP_EOL;
    $todo = input("Todo (x untuk batal) ");
    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
        echo "Sukses menambah todolist" . PHP_EOL;
    }
}
