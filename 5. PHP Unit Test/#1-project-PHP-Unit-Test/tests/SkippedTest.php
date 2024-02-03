<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Framework\TestCase;

class SkippedTest extends TestCase
{

    static private Counter $counter;
    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
        echo 'setUp dijalankan';
    }
    public function testIncrement(): void
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }
    public function testExampleSkippedFunction(): void
    {
        // panggil function dari PHP unit untuk menandai bahwa unit test ini diskip dulu
        self::markTestSkipped('Unit test ExampleSkippedFunction diskip dulu karena masih bug');
        echo self::$counter->getCounter();
    }

    // skip by condition implementation
    /**
     *@requires OSFAMILY Windows
     */
    public function testOnlyforWindows(): void
    {
        self::assertTrue(true, 'Running only for Windows');
        echo PHP_EOL . 'Running on Windows OS';
    }
    /**
     *@requires OSFAMILY Windows
     *@requires PHP >= 8.0
     */
    public function testOnlyforWindowsandPHP8(): void
    {
        self::assertTrue(true, 'Running only for Windows and PHP 8');
        echo PHP_EOL . 'Running on Windows OS and PHP 8';
    }
    public static function tearDownAfterClass(): void
    {
        echo PHP_EOL . "Tear down after class dijalankan" . PHP_EOL;
    }
}
