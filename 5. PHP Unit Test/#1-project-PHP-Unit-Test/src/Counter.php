<?php

namespace Satriabimantara\PhpUnitProject;

class Counter
{
    private int $counter = 0;
    public function increment(): void
    {
        $this->counter += 1;
    }
    public function getCounter(): int
    {
        return $this->counter;
    }
}
