<?php
require_once __DIR__ . '/../Model/ToDoList.php';
require_once __DIR__ . "/../Controller/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";


function ViewShowTodoList()
{
    while (true) {
        showToDolist();

        echo 'MENU APLIKASI ' . PHP_EOL;
        echo '1. Tambah data' . PHP_EOL;
        echo '2. Hapus data' . PHP_EOL;
        echo 'x. Keluar aplikasi' . PHP_EOL;
        $pilihan = input("Masukkan pilihan Anda ");
        if ($pilihan == "1") {
            ViewAddTodoList();
        } elseif ($pilihan == "2") {
            ViewRemoveTodoList();
        } elseif ($pilihan == "x" || $pilihan == "X") {
            break;
        } else {
            echo 'Pilihan tidak dikenali ' . PHP_EOL;
        }
    }
    echo "Sampai jumpa kembali!";
}
