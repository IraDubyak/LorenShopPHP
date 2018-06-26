<?php

namespace LorenShop\Mapper;

use LorenShop\Entity\Product;
use LorenShop\Repository\ProductRepository;

class ProductMapper
{
    /**
     * @var ArticleRepository
     */
    private $productRepository;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return array
     */
    public function findManProductsSizeXS(): array
    {
        $result = $this->productRepository->findManProductsSizeXS();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findManProductsSizeS(): array
    {
        $result = $this->productRepository->findManProductsSizeS();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findManProductsSizeM(): array
    {
        $result = $this->productRepository->findManProductsSizeM();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findManProductsSizeL(): array
    {
        $result = $this->productRepository->findManProductsSizeL();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findManProductsSizeXL(): array
    {
        $result = $this->productRepository->findManProductsSizeXL();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findManProducts(): array
    {
        $result = $this->productRepository->findManProducts();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findWomanProductsSizeXS(): array
    {
        $result = $this->productRepository->findWomanProductsSizeXS();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findWomanProductsSizeS(): array
    {
        $result = $this->productRepository->findWomanProductsSizeS();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findWomanProductsSizeM(): array
    {
        $result = $this->productRepository->findWomanProductsSizeM();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findWomanProductsSizeL(): array
    {
        $result = $this->productRepository->findWomanProductsSizeL();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findWomanProductsSizeXL(): array
    {
        $result = $this->productRepository->findWomanProductsSizeXL();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }

    public function findWomanProducts(): array
    {
        $result = $this->productRepository->findWomanProducts();

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }
    
     public function findAllProductsByCategory($id): array
    {
        $result = $this->productRepository->findAllProductsByCategory($id);

        $products = [];

        foreach ($result as $productAssoc) {
            $products[] = $this->mapRowToArcitle($productAssoc);
        }

        return $products;
    }


    /**
     * @param int $id
     * @return Product
     */
    public function findProductById(int $id): Product
    {
        $productAssoc = $this->productRepository->findProductById($id);

        return $this->mapRowToArcitle($productAssoc);
    }

    /**
     * @param array $row
     * @return Product
     */
    private function mapRowToArcitle(array $row): Product
    {
        return Product::fromState($row);
    }
}