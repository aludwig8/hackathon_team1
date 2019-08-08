<?php
namespace App\app\repositories;

use \App\app\models\Product;
use Model;

class ProductRepository
{
    protected $productModel;

    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function getProductById($id)
    {
        $product = Model::factory('App\app\models\Product')->find_one($id);
        return $product;
    }
}