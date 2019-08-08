<?php
namespace App\app\services;

use \App\app\repositories\ProductRepository;
use \App\app\models\Product;

class ProductService
{
    private $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository(new Product());
    }

    public function getProduct($id)
    {
        $product = $this->productRepository->getProductById($id);
        return $product;
    }
}