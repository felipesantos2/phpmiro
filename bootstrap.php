<?php

declare(strict_types=1);

use Symfony\Component\Dotenv\Dotenv;

function loadDotenv(): void
{
    if (file_exists($env = __DIR__ . '/.env')) {
        $dotenv = new Dotenv();
        $dotenv->load($env);
    }
}

loadDotenv();
