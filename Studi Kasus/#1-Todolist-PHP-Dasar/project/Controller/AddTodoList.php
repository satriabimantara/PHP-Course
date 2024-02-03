<?php
function addTodoList($todo)
{
    global $todolist;
    $number = sizeof($todolist) + 1;
    $todolist[$number] = $todo;
}
