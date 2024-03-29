<?php
namespace App\app\controllers;

use Psr\Container\ContainerInterface;

class UserController extends BaseController
{
    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function register($request, $response, $args) {
        $response = $this->view->render($response, 'home.twig', ['data' => 'testdata']);
        return $response;
    }
}