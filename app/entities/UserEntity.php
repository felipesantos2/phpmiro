<?php

namespace app\entities;

use DateTime;

class UserEntity extends Entity
{
    public function __construct(
        public ?string $name = null,
        public ?string $email = null,
        public ?string $password = null,
        public int|string|null $status = null,
        public DateTime|string|null $createdAt = new DateTime(),
    ) {

    }
}
