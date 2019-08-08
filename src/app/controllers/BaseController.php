<?php
namespace App\app\controllers;

use App\app\services\UserService;
use App\app\services\CartService;
use App\app\services\ProductService;
use Psr\Container\ContainerInterface;

class BaseController
{
    protected $container;
    protected $view;
    protected $userService;
    protected $cartService;
    protected $productService;

    public function __construct(ContainerInterface $container) {
        $this->view = $container->get("view");
        $this->container = $container;

        $this->userService = new UserService();
        $this->cartService = new CartService();
        $this->productService = new ProductService();
    }
}