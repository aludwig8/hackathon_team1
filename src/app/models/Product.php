<?php
namespace App\app\models;
/**
 * @property int $product_id
 * @property String $name
 * @property String $description
 * @property float $price
 * @property int $stockqty
 */
class Product extends \Model {
    public static $_table = 'product';
    public static $_id_column = 'product_id';

    function images() {
        return $this->has_many('Image');
    }
    function categories() {
        return $this->has_one('Category');
    }
}