<?php

declare(strict_types=1);

namespace core;

final class Router
{
    private array $routes = [];

    private ?IDispatcher $dispatcher;

    public function __construct()
    {
        $this->dispatcher = new RouteDispatcher();
    }

    private function add(string $method, string $path, Route $route)
    {
        $this->routes[$method][$path] = $route;
    }

    public function get(string $path, array $action): void
    {
        $this->add(HttpMethodsEnum::GET->value, $path, new Route($action[0], $action[1]));
    }

    public function post(string $path, array $action): void
    {
        $this->add(HttpMethodsEnum::POST->value, $path, new Route($action[0], $action[1]));
    }

    public function run(Request $request): void
    {
        $executed = false;
        $routes = $this->routes[$request->method];
        if (array_key_exists($request->uri, $routes)) {
            $triggedRoute = $routes[$request->uri];
            $this->dispatcher->dispatch($triggedRoute);
            $executed = true;
        }

        if (! $executed) {
            http_response_code(404);
        }

        exit;
    }
}
