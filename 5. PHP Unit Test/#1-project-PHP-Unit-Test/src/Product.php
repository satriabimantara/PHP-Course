<?php

namespace Satriabimantara\PhpUnitProject;


class Product
{
    private string $id, $name, $description;
    private int $price, $quantity;

    public function setId(string $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getId(): string
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
