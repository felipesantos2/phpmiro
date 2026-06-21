<?php

namespace app\dtos;

use app\ValueObjects\Cpf;
use app\ValueObjects\Email;
use DateTime;

final readonly class CreateUserDTO
{
    public function __construct(
        public string $name,
        public Email $email,
        public ?Cpf $cpf = null,
        public ?string $password = null,
        public ?bool $status = null,
        public ?DateTime $createdAt = null,
    ) {}
}
