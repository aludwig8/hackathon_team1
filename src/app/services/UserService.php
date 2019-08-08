<?php
namespace App\app\services;

use App\app\models\User;
use \App\app\repositories\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = [];
        }
        $this->userRepository = new UserRepository(new User());
    }

    public function getTest() {
        return $_SESSION;
    }

    public function getUser($id)
    {
        $user = $this->userRepository->getUserById($id);
        return $user;
    }
}