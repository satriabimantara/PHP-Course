<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class IncompleteTest extends TestCase
{
    static private Counter $counter;
    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
        echo "SetupBeforeClass dijalankan" . PHP_EOL;
    }
    public function testIncrement(): void
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }
    public function testIncrementSecond(): void
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
        // TO DO LIST UNIT TEST
        self::markTestIncomplete("Masih ada lanjutan unit test berikutnya di function TestIncrementSecond yang harus dikerjakan");
    }
    public static function tearDownAfterClass(): void
    {
        echo PHP_EOL . 'Semua unit test selesai dijalankan';
    }
}
