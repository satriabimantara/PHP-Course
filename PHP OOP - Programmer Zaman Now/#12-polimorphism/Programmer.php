<?php

class Programmer
{
    var string $name;
    var string $title;
    public function __construct(string $name, string $title = "Programmer")
    {
        $this->name = $name;
        $this->title = $title;
    }
}

class BackendProgrammer extends Programmer
{
    public function __construct($name)
    {
        parent::__construct($name, $title = 'BackendProgrammer');
    }
}
class FrontendProgrammer extends Programmer
{
    public function __construct($name)
    {
        parent::__construct($name, $title = 'FrontendProgrammer');
        echo 'Hai FrontendProgrammer' . PHP_EOL;
    }
}

// polimorfisme pada class
class Company
{
    public Programmer $programmer;
}


// polimorfisme pada function argumen
function sayHelloProgrammer(Programmer $programmer)
{
    // mengecek apakah suatu objek turunan dari suatu kelas
    if ($programmer instanceof BackendProgrammer) {
        echo 'Hai BackendProgrammer' . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo 'Hai FrontendProgrammer' . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo 'Hai Programmer' . PHP_EOL;
    }
}
