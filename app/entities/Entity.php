<?php

declare(strict_types=1);

namespace app\entities;

use DateTime;

abstract class Entity
{
    public function __construct() {}

    // public function __set(string $name, mixed $value): void
    // {
    //     if (property_exists(static, $name)) {
    //         $this->$name = $value;
    //     }

    //     if ($name === 'created_at') {
    //         $this->createdAt = new DateTime($value);

    //         return;
    //     }
    // }
}
