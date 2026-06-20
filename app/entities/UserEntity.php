<?php

namespace app\entities;

use DateTime;

class UserEntity extends Entity
{
    public ?int $id = null;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $password = null;

    public int|string|null $status = null;

    public DateTime|string|null $createdAt = null;

    public function __construct() {}

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
