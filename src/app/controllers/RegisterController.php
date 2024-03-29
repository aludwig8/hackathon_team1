<?php
namespace App\app\controllers;
use Psr\Container\ContainerInterface;

class RegisterController extends BaseController
{
    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function register($request, $response, $args) {
        $response = $this->view->render($response, 'register.twig');
        return $response;
    }
}