<?php
/*
Name space digunakan untuk mengorganisir kelas-kelas dengan nama yang sama agar tidak bentrok, dengan syarat nama namespace tidak sama
*/

namespace Data\One {
    class Conflict
    {
        public function __construct()
        {
            echo 'Hello Conflict Data\one';
        }
    }
}

namespace Data\Two {
    class Conflict
    {
        public function __construct()
        {
            echo 'Hello Conflict Data\two';
        }
    }
}
