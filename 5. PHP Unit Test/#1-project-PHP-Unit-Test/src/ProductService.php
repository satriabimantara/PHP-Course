<?php

namespace Satriabimantara\PhpUnitProject;

use Exception;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
        $this->repository = $repository;
    }
    public function registerProduct(Product $product): Product
    {
        if ($this->repository->findById($product->getId() != null)) {
            // berarti sudah ada product di database
            throw new Exception('Product Already Exist');
        }
        return $this->repository->save($product);
    }
    public function deleteProduct(string $id): void
    {
        $product = $this->repository->findById($id);
        if ($product == null) {
            throw new Exception("Product does not Exist");
        }
        $this->repository->delete($product);
    }
}
