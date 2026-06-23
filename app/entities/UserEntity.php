<?php

declare(strict_types=1);

namespace app\entities;

use app\dtos\CreateUserDTO;
use DateTime;

class UserEntity extends Entity
{
    public ?int $id = null;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $cpf = null;

    public ?string $password = null;

    public int|string|null $status = null;

    public DateTime|string|null $createdAt = null;

    public function __construct(CreateUserDTO $dto)
    {
        $this->name = $dto->name;
        $this->email = $dto->email->value;
        $this->password = $dto->password;
        $this->cpf = $dto->cpf->value;
        $this->createdAt = new DateTime()->format('Y-m-d H:i:s');
    }

    public function __set(string $name, mixed $value): void
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }

        if ($name === 'created_at') {
            $this->createdAt = new DateTime($value);

            return;
        }
    }
}
