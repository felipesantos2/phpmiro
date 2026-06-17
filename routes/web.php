<?php

declare(strict_types=1);

use app\controllers\WelcomeController;

dd(
    $_SERVER['REQUEST_URI'],
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['HTTP_HOST'],
    $_SERVER['HTTP_ACCEPT'],
    $_SERVER['QUERY_STRING'],
    $_SERVER['HTTP_HOST']
);

get('/', function() {

});

get('/welcome', [WelcomeController::class, 'index']);

post('/', function() {

});

function get($path, Closure|string|array $callback)
{
    return $callback();
}

function post($path, Closure|string|array $callback)
{
    if( is_callable($callback) ) {
        return $callback();
    }

    if( is_string($callback) ) {
        return call_user_func($callback);
    }

    if( is_array($callback) ) {
        return call_user_func_array($callback);
    }
}

