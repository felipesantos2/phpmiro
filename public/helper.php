<?php

use core\View;
use core\ViewLoader;

function view(string $view, array $data = []): View
{
    return ViewLoader::view($view, $data);
}
