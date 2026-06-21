<?php

namespace app\ValueObjects;

final class Email
{
    public readonly ?string $email {
        get {
            return $this->email;
        }

        set {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $this->email = $value;
            } else {
                $this->email = null;
            }
        }
    }
}
