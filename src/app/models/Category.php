<?php
namespace App\app\models;
/**
 * @property int $category_id
 * @property string $name
 */
class Category extends \Model {
    public static $_table = 'category';
    public static $_id_column = 'category_id';

    function products() {
        $this->has_many('product');
    }
}