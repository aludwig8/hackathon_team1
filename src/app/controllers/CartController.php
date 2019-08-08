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
        $response = $this->view->render($response, 'home.twig', ['data' => 'testdata']);
        return $response;
    }

    public function addToCart($request, $response, $args) {
        // get product from db
        $product = $this->productService->getProduct($request->id);
//var_dump($product);
        // add to cart
        // redirect to home page
        return $response->withRedirect('/');
    }
}