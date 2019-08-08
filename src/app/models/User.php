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
 * @property int $last_log_in;
 */
class User extends \Model {
    public static $_table = 'user';
    public static $_id_column = 'user_id';

    public function toArray() {
        // TODO: make generic
        return [
             'user_id' => $this->user_id,
             'login' => $this->login,
             'email' => $this->email,
             'firstname' => $this->firstname,
             'lastname' => $this->lastname,
             'street' => $this->street,
             'city' => $this->city,
             'zip' => $this->zip,
             'country' => $this->country
        ];
    }
}