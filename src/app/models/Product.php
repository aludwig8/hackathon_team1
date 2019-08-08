<?php
namespace App\app\models;
/**
 * @property int $product_id
 * @property String $name
 * @property String $description
 * @property String $short_description
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

    public function toArray() {
        // TODO: make generic
        return [
            'product_id' => $this->product_id,
            'name' => $this->name,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'price' => $this->price,
            'stockqty' => $this->stockQty
        ];
    }

}