<?php
namespace App\app\services;

use App\app\models\Product;

class CartService
{
    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addToCart(Product $product)
    {
        // only add if enough in stock
        if ($product->getStockqty() >= 1) {
            $_SESSION['cart'][] = $product;
        }
    }

    public function getCart()
    {
        return $_SESSION['cart'];
    }
}