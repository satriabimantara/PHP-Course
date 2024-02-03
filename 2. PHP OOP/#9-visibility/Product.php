<?php
class Product
{
    private string $name;
    private int $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}
