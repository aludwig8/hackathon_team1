<?php

// DUMMY
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hällo " . $args['name']);
});

$app->get('/', \HomeController::class . ':home')->setName('home');
$app->get('/about', \AboutController::class . ':about')->setName('about');
$app->get('/cart', \CartController::class . ':show')->setName('cart');
$app->get('/home', \UserController::class . ':home')->setName('home');
$app->get('/login',\LoginController::class . ':login')->setName('login');
$app->get('/register', \RegisterController::class . ':register')->setName('register');