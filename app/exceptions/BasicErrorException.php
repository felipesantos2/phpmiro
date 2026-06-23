<?php

declare(strict_types=1);

namespace app\exceptions;

use Exception;

class BasicErrorException extends Exception
{
    public function __construct(string $message = '')
    {
        parent::__construct($message);
    }

    public function statusCode(): int
    {
        return 500;
    }

    public function render(): string
    {
        return <<<HTML

           <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>{$this->statusCode()}</title>
            </head>
            <body>
                <h1>{$this->message}</h1>
                <p>Status Code: <strong>{$this->statusCode()}</strong></p>
            </body>
            </html>

        HTML;
    }
}
