<?php
namespace App\app\controllers;

use Psr\Container\ContainerInterface;
use App\app\decorators\UserDecorator;
use App\app\dtos\Dto;

class HomeController extends BaseController
{
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function home($request, $response, $args) {
        $user = $this->userService->getUser($request->id);
        $user = Dto::make($user);
        // add $user->lastLogin that holds a datetime string if last_log_in is set (for use in template)
        $user = UserDecorator::decorate($user);
//var_dump($user);
//var_dump($user->lastLogin);
        $response = $this->view->render($response, 'home.twig', ['user' => $user]);
        return $response;
    }
}