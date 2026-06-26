<?php

declare(strict_types=1);

use app\controllers\UserController;
use app\controllers\WelcomeController;

enum HttpMethods: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATH = 'PATH';
    case DELETE = 'DELETE';
}

class RouteDispatcher
{
    public static function dispatch(Route $route): void
    {
        $controller = $route->controller;
        $methodName = $route->method;
        $instance = new $controller();

        $instance->$methodName();
    }
}

final readonly class Route
{
    public string $controller;

    public string $method;

    public function __construct(
        array $action
    ) {
        [$this->controller, $this->method] = $action;
    }
}

final class Router
{
    private array $getRoutes = [];

    private array $postRoutes = [];

    public function get(string $path, array $action): void
    {
        $this->getRoutes[$path] = new Route($action);
    }

    public function post(string $path, array $action): void
    {
        $this->postRoutes[$path] = new Route($action);
    }

    public function run(Request $request): void
    {
        $executed = false;
        if ($request->method == HttpMethods::GET->value) {
            if (array_key_exists($request->uri, $this->getRoutes)) {
                RouteDispatcher::dispatch($this->getRoutes[$request->uri]);
                $executed = true;
            }
            if (! $executed) {
                http_response_code(404);
            }
        }

        if ($request->method == HttpMethods::POST->value) {
            if (array_key_exists($request->uri, $this->postRoutes)) {
                RouteDispatcher::dispatch($this->postRoutes[$request->uri]);
                $executed = true;
            }
            if (! $executed) {
                http_response_code(404);
            }
        }

        exit;
    }
}

class Request
{
    public ?string $queryString = null;

    public ?string $method = null;

    public ?string $uri = null;

    public ?string $host = null;

    public ?string $acceptTypes = null;

    public function __construct()
    {
        $this->queryString = $_SERVER['QUERY_STRING'] ?? null;
        $this->method = $_SERVER['REQUEST_METHOD'] ?? null;
        $this->uri = $_SERVER['REQUEST_URI'] ?? null;
        $this->host = $_SERVER['HTTP_HOST'] ?? null;
        $this->acceptTypes = $_SERVER['HTTP_ACCEPT'] ?? null;
    }
}

$router = new Router();

$router->get('/', [WelcomeController::class, 'index']);
$router->get('/users', [UserController::class, 'index']);
$router->post('/users', [UserController::class, 'store']);

$router->run(new Request());
