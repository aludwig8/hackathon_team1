<?php
namespace App\app\models;
/**
 * @property int $user_id;
 * @property string $login;
 * @property string $password;
 * @property string $email;
 * @property string $firstname;
 * @property string $lastname;
 * @property string $street;
 * @property string $city;
 * @property string $zip;
 * @property string $country;
 */
class User extends \Model {
    public static $_table = 'user';
    public static $_id_column = 'user_id';
}