<?php
namespace App\app\models;
/**
 * @property int $image_id
 * @property string $path
 * @property int $preview
 */
class Image extends \Model {
    public static $_table = 'image';
    public static $_id_column = 'image_id';
}