<?php

session_start();

define('VENDOR_FILE', __DIR__ . '/../vendor/autoload.php');
define('BOOTSTRAP_FILE', __DIR__ . '/../core/bootstrap.php');
define('ROUTES_FILE', __DIR__ . '/../routes/web.php');
define('PUBLIC_FILE', __DIR__ . './index.php');

define('TEMPLATE_PATH', __DIR__ . '/../app/views');
define('CACHE_PATH', __DIR__ . '/../cache');

define('PUBLIC_PATH', __DIR__ . './');


function get(string $path, Closure|string|array $callback)
{
    $queryString = $_SERVER['QUERY_STRING'] ?? null;
    $method = $_SERVER['REQUEST_METHOD'] ?? null;
    $uri = $_SERVER['REQUEST_URI'] ?? null;
    $host = $_SERVER['HTTP_HOST'] ?? null;
    $acceptTypes = $_SERVER['HTTP_ACCEPT'] ?? null;

    if($path === $uri) {

        if( is_string($callback) ) {
            return call_user_func_array($callback, []);
        }

        if( is_array($callback) ) {

            $className = $callback[0];
            $methodName = $callback[1];
            $controller = new $className();

            return call_user_func_array([$controller, $methodName], []);
        }

        if( is_callable($callback) ) {
            return call_user_func_array($callback, []);
        }

        return;

    } else {
        return "500 Internal Server Error";
    }

    return;
}

function post(string $path, Closure|string|array $callback)
{
    $queryString = $_SERVER['QUERY_STRING'] ?? null;
    $method = $_SERVER['REQUEST_METHOD'] ?? null;
    $uri = $_SERVER['REQUEST_URI'] ?? null;
    $host = $_SERVER['HTTP_HOST'] ?? null;
    $acceptTypes = $_SERVER['HTTP_ACCEPT'] ?? null;

    if($path === $uri) {

        if( is_string($callback) ) {
            return call_user_func($callback);
        }

        if( is_array($callback) ) {
            return call_user_func_array($callback, []);
        }

        if( is_callable($callback) ) {
            return $callback();;
        }

        return;

    } else {
        return "500 Internal Server Error";
    }

    return;
}


if(file_exists(BOOTSTRAP_FILE)) {

    require BOOTSTRAP_FILE;

    require VENDOR_FILE;

    require ROUTES_FILE;

} else {

    throw new Exception('Erro!');

}

