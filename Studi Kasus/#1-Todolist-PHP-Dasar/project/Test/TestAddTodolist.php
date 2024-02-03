<?php
require_once '../Model/ToDoList.php';
require_once '../Controller/AddTodoList.php';

addTodoList("Membuat nasi goreng");
addTodoList("Menyapu");
var_dump($todolist);
