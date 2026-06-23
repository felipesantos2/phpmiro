<?php

declare(strict_types=1);

namespace app\valueObjects;

final class Email
{
    public ?string $value {
        get {
            return $this->value;
        }

        set(?string $value) {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $this->value = $value;
            } else {
                $this->value = null;
            }
        }
    }
}
