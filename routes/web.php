<?php

declare(strict_types=1);

use app\controllers\UserController;
// use app\controllers\UserController;

use app\controllers\WelcomeController;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

dd($request);

get('/', [WelcomeController::class, 'index']);
// get('/users', [UserController::class, 'index']);
