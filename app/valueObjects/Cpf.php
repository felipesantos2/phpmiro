<?php

declare(strict_types=1);

namespace app\valueObjects;

class Cpf
{
    public ?string $value {
        get {
            return $this->value;
        }

        set(?string $value) {
            $this->value = $value;
        }
    }
}
