<?php
require_once '../Model/ToDoList.php';
require_once '../Controller/RemoveTodoList.php';
require_once '../Controller/AddTodoList.php';
require_once '../Controller/ShowTodoList.php';

addTodoList('Menyapu');
addTodoList('Memasak');
addTodoList('Tidur');
addTodoList('Renang');

showToDolist();

removeToDolist(3);
showToDolist();
