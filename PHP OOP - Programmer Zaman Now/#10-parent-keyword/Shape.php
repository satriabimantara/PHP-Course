<?php

namespace Data {
    class Shape
    {
        public function getCorner(): int
        {
            return 0;
        }
    }
    class Rectangle extends Shape
    {
        public function getCorner(): int
        {
            return 4;
        }
        public function getParentCorner(): int
        {
            /*
            Parent keyword digunakan untuk memanggil function di parent yang sudah di overriding di child class
            */
            return parent::getCorner();
        }
    }
}
