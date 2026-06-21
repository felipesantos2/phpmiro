<?php

/**
 * Ways to Use the Routes
 *
 * get('/', [WelcomeController::class, 'index']);
 * get('/welcome', 'WelcomeController@index');
 * get('/usuarios', [UserController::class, 'index']);
 * get('/usuarios', fn() => 'Hello World' );
 */
function get(string $path, Closure|string|array $callback): mixed
{
    $queryString = $_SERVER['QUERY_STRING'] ?? null;
    $method = $_SERVER['REQUEST_METHOD'] ?? null;
    $uri = $_SERVER['REQUEST_URI'] ?? null;
    $host = $_SERVER['HTTP_HOST'] ?? null;
    $acceptTypes = $_SERVER['HTTP_ACCEPT'] ?? null;

    if ($path === $uri && $method == 'GET') {

        if (is_string($callback)) {

            $splited = explode('@', $callback);
            $className = '\\app\\controllers\\' . $splited[0];
            $methodName = $splited[1];
            $controller = new $className;

            return call_user_func_array([$controller, $methodName], []);
        }

        if (is_array($callback)) {

            $className = $callback[0];
            $methodName = $callback[1];
            $controller = new $className;

            return call_user_func_array([$controller, $methodName], []);
        }

        if ($callback instanceof Closure) {
            return call_user_func_array($callback, []);
        }

        http_response_code(404);

        return '404 Not Found';

    }
    http_response_code(404);

    return '404 Not Found';

}

function post(string $path, Closure|string|array $callback): mixed
{
    $queryString = $_SERVER['QUERY_STRING'] ?? null;
    $method = $_SERVER['REQUEST_METHOD'] ?? null;
    $uri = $_SERVER['REQUEST_URI'] ?? null;
    $host = $_SERVER['HTTP_HOST'] ?? null;
    $acceptTypes = $_SERVER['HTTP_ACCEPT'] ?? null;

    if ($path === $uri && $method == 'GET') {

        if (is_string($callback)) {
            return call_user_func($callback);
        }

        if (is_array($callback)) {
            return call_user_func_array($callback, []);
        }

        if ($callback instanceof Closure) {
            return $callback();
        }

        return '500 Internal Server Error';

    } else {
        return '500 Internal Server Error';
    }

    return null;
}
