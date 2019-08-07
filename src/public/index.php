<?php
session_start();
require __DIR__ .'/../../vendor/autoload.php';

$appConfig = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
]];

$app = new \Slim\App($appConfig);

require __DIR__ . "/../config/config.php";
require __DIR__ . "/../app/routes.php";

$app->run();
