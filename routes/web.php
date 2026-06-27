<?php

declare(strict_types=1);

use app\controllers\UserController;
use app\controllers\WelcomeController;
use core\Request;
use core\Router;

$router = new Router();

$router->get('/', [WelcomeController::class, 'index']);
$router->get('/users', [UserController::class, 'index']);
$router->post('/users', [UserController::class, 'store']);

$router->run(new Request());
