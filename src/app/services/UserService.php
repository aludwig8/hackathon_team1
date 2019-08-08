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

    public function checkUserCredentials($username, $password)
    {
        $found = False;
        $user = $this->userRepository->getUserByUsernamePassword($username, $password);
        if ($user) {
            $found = True;
            $_SESSION['user'] = ['user_id' => $user->get('user_id'), 'password' => $user->get('password')];
        }

        return $found;
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();
    }
}