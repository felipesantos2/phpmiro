<?php

namespace app\entities;

use DateTime;

class Entity
{
    public function __construct() {}

    public function __set(string $name, mixed $value): void
    {
        if (property_exists(static, $name)) {
            $this->$name = $value;
        }

        if ($name === 'created_at') {
            $this->createdAt = new DateTime($value);

            return;
        }
    }
}
