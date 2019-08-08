<?php
namespace App\app\repositories;

use \App\app\models\User;
use Model;

class UserRepository
{
    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function getUserById($id)
    {
        $user = Model::factory('App\app\models\User')->find_one($id);
        return $user;
    }
}