<?php

namespace app\ValueObjects;

class Phone
{
    public readonly ?string $phone {
        get {
            return $this->phone;
        }

        set(?string $value) {
            $this->phone = $value;
        }
    }
}
