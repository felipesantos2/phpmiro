<?php

declare(strict_types=1);

use core\ViewLoader;

session_start();

function view(string $view, array $data = []): View
{
    ViewLoader::view($view, $data = []);
}

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/../routes/web.php';
