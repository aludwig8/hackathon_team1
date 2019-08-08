<?php
use App\app\models\User;

session_start();
require __DIR__ .'/../../vendor/autoload.php';

$appConfig = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
]];

$app = new \Slim\App($appConfig);

require __DIR__ . "/../config/config.php";
require __DIR__ . "/../app/routes.php";

require __DIR__ .'/../../vendor/j4mie/idiorm/idiorm.php';
ORM::configure('mysql:host=mariadb;dbname=hackathon');
ORM::configure('username', 'hackathon');
ORM::configure('password', 'hackathon');

$user = Model::factory('App\app\models\User')->find_one(1);
//$category = Model::factory('App\app\models\Category')->find_one(1);

$app->run();
