<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

// Implementasikan kelas CounterTest dengan turunan kelas TestCase
class CounterTest extends TestCase
{
    private Counter $counter;
    // Function setUp dijalankan setiap kali sebelum function UnitTest dijalankan
    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo 'Membuat Counter ' . PHP_EOL;
    }

    public function testCounter()
    {
        // $counter = new Counter();
        $this->counter->increment();
        // Implementasi kelas Assertion untuk mencocokan ekspektasi nilai dengan nilai yang dihasilkan oleh sistem
        Assert::assertEquals(1, $this->counter->getCounter());
        $this->counter->increment();
        $this->counter->increment();
        Assert::assertEquals(3, $this->counter->getCounter());
    }
    // Fitur annotation Tes
    // Agar membuat test function tidak diawali prefix Test**
    /** 
     *@test
     */
    public function increment()
    {
        // $counter = new Counter();
        $this->counter->increment();
        // Implementasi kelas Assertion untuk mencocokan ekspektasi nilai dengan nilai yang dihasilkan oleh sistem
        self::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirstIncrement(): Counter
    {
        // $counter = new Counter();
        $this->counter->increment();
        self::assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }
    /**
     * @depends testFirstIncrement
     */
    public function testSecondIncrement(Counter $counter): void
    {
        $counter->increment();
        self::assertEquals(2, $counter->getCounter());
    }

    // Function tearDown dijalankan setiap kali setelah function UnitTest dijalankan
    protected function tearDown(): void
    {
        echo 'Tear down dijalankan: ' . PHP_EOL;
    }
    // Cara lain menamakan tearDown yaitu menggunakan annotation after
    /**
     *@after 
     */
    // protected function after(): void
    // {
    //     echo 'After' . PHP_EOL;
    // }
}
