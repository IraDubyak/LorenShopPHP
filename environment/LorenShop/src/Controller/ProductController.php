<?php

namespace LorenShop\Controller;

use LorenShop\Entity\Product;
use LorenShop\Entity\SexCategory;
use LorenShop\Mapper\ProductMapper;
use LorenShop\Repository\ProductRepository;

class ProductController {

    public function productManList() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findManProducts();

        return $product;
    }

    public function productManSizeXS() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findManProductsSizeXS();

        return $product;
    }
    public function productList() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findProduct();

        return $product;
    }

    public function productManSizeS() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findManProductsSizeS();

        return $product;
    }

    public function productManSizeM() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findManProductsSizeM();

        return $product;
    }

    public function productManSizeL() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findManProductsSizeL();

        return $product;
    }

    public function productManSizeXL() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findManProductsSizeXL();

        return $product;
    }

     public function productWomanSizeXS() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findWomanProductsSizeXS();

        return $product;
    }

     public function productWomanSizeS() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findWomanProductsSizeS();

        return $product;
    }

     public function productWomanSizeM() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findWomanProductsSizeM();

        return $product;
    }

     public function productWomanSizeL() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findWomanProductsSizeL();

        return $product;
    }

     public function productWomanSizeXL() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findWomanProductsSizeXL();

        return $product;
    }

     public function productWomanList() {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findWomanProducts();

        return $product;
    }

    public function productsCategoryList($id) {

        $productMapper = new ProductMapper(
            new ProductRepository()
        );

        $product = $productMapper->findAllProductsByCategory($id);

        return $product;
    }

    public function productShow(int $id): Product {
        $productMapper = new ProductMapper(new ProductRepository());

        $product = $productMapper->findProductById($id);

        return $product;
    }

}
?>