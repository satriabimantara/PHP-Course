<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Framework\TestCase;


/* 
Sharing Fixture
- Sharing fixture digunakan untuk menggunakan objek kelas yang bakal disharing antar 1 unit test dengan 1 unit test lainnya
- Contoh penggunaannya yaitu ketika sharing koneksi database, dibanding membuat objek baru setiap menjalankan unit test, kita bisa menggunakan sharing fixture, begitupun menutup koneksi ke database
- Ditandai dengan kata static
*/

class CounterStaticTest extends TestCase
{
    static private Counter $counter;
    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
    }
    public function testFirst(): void
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }
    public function testSecond(): void
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }
    public static function tearDownAfterClass(): void
    {
        echo PHP_EOL . 'Test Unit keseluruhan selesai dijalankan' . PHP_EOL;
    }
}
