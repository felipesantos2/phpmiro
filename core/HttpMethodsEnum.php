<?php

declare(strict_types=1);

namespace core;

enum HttpMethodsEnum: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATH = 'PATH';
    case DELETE = 'DELETE';
}
