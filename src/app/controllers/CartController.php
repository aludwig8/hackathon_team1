<?php
namespace App\app\controllers;

use App\app\services\UserService;
use Psr\Container\ContainerInterface;

class CartController extends BaseController
{
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function show($request, $response, $args) {
        var_dump($this->userService->getTest());
        $response = $this->view->render($response, 'home.twig', ['data' => 'testdata']);
        return $response;
    }
}