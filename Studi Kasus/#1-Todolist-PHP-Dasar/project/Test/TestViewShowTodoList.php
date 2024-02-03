<?php
require_once "../Model/ToDoList.php";
require_once "../Controller/AddTodoList.php";
require_once "../View/ViewShowTodoList.php";

addTodoList("Makan");
addTodoList("Tidur");
addTodoList("Mandi");
ViewShowTodoList();
