<?php

declare(strict_types=1);

namespace core;

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
