<?php
namespace App\app\models;
/**
 * @property int $order_id
 * @property int $user_id
 * @property int $order_number
 */
class Order extends \Model {
    public static $_table = 'order';
    public static $_id_column = 'order_id';

    function user() {
        $this->has_one('User');
    }
    function products() {
        $this->has_many('Product');
    }
}