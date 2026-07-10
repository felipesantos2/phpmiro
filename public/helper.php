<?php

declare(strict_types=1);

use core\View;

function view(string $view, array $data = []): View
{
    return new View($view, $data);
}
