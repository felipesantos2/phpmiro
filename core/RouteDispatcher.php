<?php

declare(strict_types=1);

namespace core;

class RouteDispatcher implements IDispatcher
{
    public function dispatch(Route $route): void
    {
        $controller = $route->controller;
        $methodName = $route->method;
        $instance = new $controller();

        $instance->$methodName();
    }
}
