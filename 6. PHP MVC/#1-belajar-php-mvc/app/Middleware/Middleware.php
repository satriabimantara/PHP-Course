<?php

namespace Satriabimantara\BelajarPhpMvc\Middleware;

// buat kontrak atau interface dari middleware agar bisa diimplementasikan oleh kelas-kelas middleware
interface Middleware
{
    function before(): void;
}
