<?php

namespace Satriabimantara\PhpUnitProject;

use Exception;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
        // echo PHP_EOL . 'Setup dijalankan' . PHP_EOL;
    }

    public function testStub(): void
    {
        $product = new Product();
        $product->setId("1");
        // Konfigurasi Stub
        $this->repository->method('findById')->willReturn($product);

        self::assertSame($product, $this->repository->findById("1"));
    }
    public function testStubMap(): void
    {
        $product1 = new Product();
        $product1->setId("1");
        $product2 = new Product();
        $product2->setId("1");
        $map = [
            ["1", $product1],
            ["2", $product2]
        ];
        $this->repository->method('findById')
            ->willReturnMap($map);
        self::assertSame($product1, $this->repository->findById("1"));
        self::assertSame($product2, $this->repository->findById("2"));
    }

    public function testStubCallBackFunction(): void
    {
        $this->repository->method('findById')
            ->willReturnCallback(function (string $id) {
                $product = new Product();
                $product->setId($id);
                return $product;
            });

        for ($i = 0; $i < 10; $i++) {
            $results = $this->repository->findById($i);
            self::assertEquals($i, $this->repository->findById($i)->getId());
        }
    }

    // implementasi unit test untuk function register pada ProductService
    public function testRegisterSuccess(): void
    {
        // atur stub method
        $this->repository->method('findById')->willReturn(null);
        $this->repository->method('save')->willReturnArgument(0); //mengembalikan argument ke-0 pada function save

        $product = new Product();
        $product->setId('1');
        $product->setName('Pakaian Baru');

        $results = $this->service->registerProduct($product);
        self::assertEquals($product->getId(), $results->getId());
        self::assertEquals($product->getName(), $results->getName());
    }

    // test scenario gagal untuk function register, ketika product sudah ada di db
    public function testRegisterFailed(): void
    {
        // create exception
        $this->expectException(\Exception::class);

        $productInDB = new Product();
        $productInDB->setId("1");
        $this->repository->method('findById')->willReturn($productInDB);

        // coba registerkan product yang sudah ada ke DB
        $newProductIncome = new Product();
        $newProductIncome->setId("2");
        $results = $this->service->registerProduct($newProductIncome);
    }

    // implementasi unit test untuk DeleteProduct
    public function testDeleteSuccess(): void
    {
        $product = new Product();
        $product->setId("1");
        $this->repository->method('findById')->willReturn($product);

        $this->service->deleteProduct("1");
        self::assertTrue(true, "Success delete product with ID 1");
    }
    public function testDeleteFailed(): void
    {
        $this->expectException(Exception::class);
        $this->repository->method('findById')->willReturn(null);
        $this->service->deleteProduct("1");
    }

    protected function tearDown(): void
    {
        // echo PHP_EOL . "Semua Stub unit test sudah dijalankan!" . PHP_EOL;
    }
}
