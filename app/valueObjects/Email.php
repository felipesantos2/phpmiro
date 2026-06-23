<?php

declare(strict_types=1);

namespace app\valueObjects;

use app\exceptions\BasicErrorException;

final class Email
{
    public function __construct(private ?string $email) {}

    public function getEmail(): ?string
    {

        if (! filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new BasicErrorException('This email is not valid!');
        }

        return $this->email;
    }
}
