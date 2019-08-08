<?php
namespace App\app\controllers;

use Psr\Container\ContainerInterface;

class AboutController extends BaseController
{
    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function about($request, $response, $args) {
        return $response->write("about");
    }
}