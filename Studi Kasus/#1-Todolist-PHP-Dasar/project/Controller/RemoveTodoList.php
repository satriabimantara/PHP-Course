<?php
function removeToDolist(int $number): bool
{
    global $todolist;
    if ($number > sizeof($todolist)) {
        return false;
    }

    // Algoritma menggeser value pada index array ayng dihapus
    for ($i = $number; $i < sizeof(
        $todolist
    ); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }

    // hapus value array pada index terakhir
    unset($todolist[sizeof($todolist)]);
    return true;
}
