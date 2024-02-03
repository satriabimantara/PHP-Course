<?php

namespace Satriabimantara\PhpUnitProject;

use PHPUnit\Framework\TestCase;


class ProductServiceMockTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testMock(): void
    {
        $product = new Product();
        $product->setId('1');

        $this->repository->expects($this->once())
            ->method('findById')
            ->willReturn($product);

        self::assertSame($product, $this->repository->findById("1"));
    }

    // implementing Mock into delete function in Product Service
    public function testDeleteSuccess(): void
    {
        $this->repository->expects(self::once())
            ->method('delete');

        $product = new Product();
        $product->setId("2");
        $this->repository->expects(self::once())
            ->method('findById')
            ->willReturn($product);

        $this->service->deleteProduct("1");
        self::assertTrue(true, 'Success Delete Product');
    }

    // implementing Mock into delete function in Failed scenario
    public function testDeleteFailed(): void
    {
        $this->repository->expects(self::never())
            ->method('delete');
        $this->repository->expects(self::once())
            ->method('findById')
            ->willReturn(null);

        $this->expectException(\Exception::class);
        $this->service->deleteProduct("1");
    }

    // Implementing parameter checking in Mock Object example
    public function testDeleteSuccessParameterChecking(): void
    {

        $product = new Product();
        $product->setId("1");
        $this->repository->expects(self::once())
            ->method('delete')
            ->with(self::equalTo($product));

        $this->repository->expects(self::once())
            ->method('findById')
            ->willReturn($product)
            ->with(self::equalTo($product->getId()));

        $this->service->deleteProduct("1");
        self::assertTrue(true, 'Success Delete Product');
    }
    // Implementing parameter checking in Mock Object for failed scenario
    public function testDeleteFailedParameterChecking(): void
    {
        $this->repository->expects(self::never())
            ->method('delete');
        $this->repository->expects(self::once())
            ->method('findById')
            ->willReturn(null)
            ->with(self::equalTo("2"));

        $this->expectException(\Exception::class);
        $this->service->deleteProduct("2");
    }
}
