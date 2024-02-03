<?php
require_once "../Model/ToDoList.php";
require_once "../Controller/AddTodoList.php";
require_once "../Controller/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";

addTodoList("Makan");
addTodoList("Tidur");
addTodoList("Mandi");
addTodoList("Berkebun");
showToDolist();
ViewAddTodoList();
showToDolist();
