<?php

// DUMMY
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hällo " . $args['name']);
});

$app->get('/', \HomeController::class . ':home')->setName('home');
$app->get('/about', \AboutController::class . ':about')->setName('about');
$app->get('/cart', \CartController::class . ':show')->setName('cart');
$app->get('/register', \UserController::class . ':register')->setName('register');

