<?php

namespace app\valueObjects;

final class Email
{
    public ?string $email {
        get {
            return $this->email;
        }

        set(?string $value) {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $this->email = $value;
            } else {
                $this->email = null;
            }
        }
    }
}
