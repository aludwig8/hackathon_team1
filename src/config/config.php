<?php
use \App\app\controllers\AboutController;
use \App\app\controllers\CartController;
use \App\app\controllers\HomeController;
use \App\app\controllers\UserController;

$container = $app->getContainer();
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../views', [
        'cache' => false,
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));
    return $view;
};

$container['AboutController'] = function($c) {
    return new AboutController($c);
};
$container['CartController'] = function($c) {
    return new CartController($c);
};
$container['HomeController'] = function($c) {
    return new HomeController($c);
};
$container['UserController'] = function($c) {
    return new UserController($c);
};
