<?php

namespace Satriabimantara\PhpUnitProject;

interface ProductRepository
{
    function save(Product $product): Product;
    function delete(Product $product): void;
    function findById(string $id): ?Product;
    function getAll(): array;
}
