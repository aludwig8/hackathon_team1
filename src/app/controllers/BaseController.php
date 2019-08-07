<?php
namespace App\app\controllers;

use Psr\Container\ContainerInterface;

class BaseController
{
    protected $container;
    protected $view;

    public function __construct(ContainerInterface $container) {
        $this->view = $container->get("view");
        $this->container = $container;
    }
}