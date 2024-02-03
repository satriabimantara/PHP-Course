<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Event\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    // implementasi materi setUp
    private Person $person;
    // By default nama functionnya adalah setUp()
    // protected function setUp(): void
    // {
    //     $this->person = new Person('Satria');
    // }
    /**
     * @before 
     */
    public function createPerson(): void
    {
        $this->person = new Person('Satria');
    }
    public function testPersonSuccess()
    {
        // tidak perlu menginisialisasi objek person setiap memanggil test case karena sudah dihandle setUp
        // $person = new Person('Satria'); 
        self::assertEquals("Halo Budi, My Name is Satria", $this->person->sayHello('Budi'));
    }
    public function testPersonException()
    {
        // $person = new Person('Satria');
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }
    public function testSayGoodByeSuccess()
    {
        // $person = new Person('Satria');
        $this->expectOutputString('Good Bye Made' . PHP_EOL);
        $this->person->sayGoodBye("Made");
    }
}
