<?php
namespace App\app\controllers;

use Psr\Container\ContainerInterface;
use App\app\dtos\Dto;

class HomeController extends BaseController
{
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function home($request, $response, $args) {
        $user = $this->userService->getUser($request->id);
        $user = Dto::make($user);
//        $user = UserProfileDecorator::decorate($user);
var_dump($user);
        $response = $this->view->render($response, 'home.twig', ['user' => $user]);
        return $response;
    }
}