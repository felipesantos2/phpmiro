<?php

declare(strict_types=1);

namespace core;

interface IDispatcher
{
    public function dispatch(Route $route): void;
}
