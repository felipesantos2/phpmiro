<?php

declare(strict_types=1);

use League\Route\Router;

$router = new Router();

$router->get('/', 'UserController::index');
