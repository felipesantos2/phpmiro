<?php

declare(strict_types=1);

use app\controllers\WelcomeController;

use app\support;

get('/', [WelcomeController::class, 'index']);
get('/welcome', [WelcomeController::class, 'index']);

