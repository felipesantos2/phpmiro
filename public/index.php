<?php

use Symfony\Component\Dotenv\Dotenv;

session_start();

define('VENDOR_FILE', __DIR__ . '/../vendor/autoload.php');
define('BOOTSTRAP_FILE', __DIR__ . '/../core/bootstrap.php');

define('ROUTES_FILE', __DIR__ . '/../routes/web.php');
define('ROUTER_FILE', __DIR__ . '/../core/libray/router.php');

define('PUBLIC_FILE', __DIR__ . './index.php');

define('TEMPLATE_PATH', __DIR__ . '/../app/views');
define('CACHE_PATH', __DIR__ . '/../cache');

define('PUBLIC_PATH', __DIR__ . './');

if (file_exists(BOOTSTRAP_FILE)) {

    require BOOTSTRAP_FILE;

    require VENDOR_FILE;

    // TODO: remove this
    $dotenv = new Dotenv;
    // Load a single .env file
    $dotenv->load(__DIR__ . '/../.env');

    require ROUTER_FILE;

    require ROUTES_FILE;

} else {
    http_response_code(500);
    throw new Exception('Erro!');
}
