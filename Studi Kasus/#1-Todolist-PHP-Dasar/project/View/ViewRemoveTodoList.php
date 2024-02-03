<?php
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . '/../Controller/RemoveTodoList.php';

function ViewRemoveTodoList()
{
    echo "REMOVE TODOLIST " . PHP_EOL;
    $number = input('Hapus (x untuk batal)') . PHP_EOL;
    if ($number == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeToDolist($number);
        if ($success) {
            echo "Berhasil menghapus TODOLIST" . PHP_EOL;
        } else {
            echo "Gagal menghapus TODOLIST" . PHP_EOL;
        }
    }
}
