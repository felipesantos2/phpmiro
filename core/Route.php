<?php

declare(strict_types=1);

namespace core;

final readonly class Route
{
    public function __construct(
        public string $controller,
        public string $method,
    ) {
        // [$controller, $method] = $action;

        // $this->controller = $controller;
        // $this->method = $method;
    }
}
