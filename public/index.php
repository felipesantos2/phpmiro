<?php

session_start();

define('BOOTSTRAP_FILE', __DIR__ . '/../core/bootstrap.php');
define('ROUTES_FILE', __DIR__ . '/../routes/web.php');
define('VENDOR_FILE', __DIR__ . '/../vendor/autoload.php');
define('PUBLIC_FILE', __DIR__ . './index.php');

if(file_exists(BOOTSTRAP_FILE)) {
    require BOOTSTRAP_FILE;
    require VENDOR_FILE;
    require ROUTES_FILE;
} else {
    throw new Exception('Erro!');
}

