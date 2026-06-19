<?php

declare(strict_types=1);

// use app\controllers\UserController;

use app\controllers\UserController;
use app\controllers\WelcomeController;

get('/', [WelcomeController::class, 'index']);
get('/users', [UserController::class, 'index']);
