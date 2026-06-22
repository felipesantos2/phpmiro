<?php

session_start();

define('VENDOR_FILE', __DIR__ . '/../vendor/autoload.php');
define('BOOTSTRAP_FILE', __DIR__ . '/../core/bootstrap.php');

define('DOTENV_FILE', __DIR__ . '/../core/dotenv.php');

define('ROUTES_FILE', __DIR__ . '/../routes/web.php');

define('TEMPLATE_PATH', __DIR__ . '/../app/views');
define('CACHE_PATH', __DIR__ . '/../cache');

if (file_exists(BOOTSTRAP_FILE)) {

    require BOOTSTRAP_FILE;

    require VENDOR_FILE;

    require DOTENV_FILE;

    require ROUTES_FILE;
} else {
    http_response_code(500);
    throw new Exception('Erro!');
}
