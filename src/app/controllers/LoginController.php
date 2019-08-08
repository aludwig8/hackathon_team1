<?php
namespace App\app\controllers;
use Psr\Container\ContainerInterface;

class LoginController extends BaseController
{
    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function login($request, $response, $args) {
        $response = $this->view->render($response, 'login.twig');
        return $response;
    }
}