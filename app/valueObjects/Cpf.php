<?php

namespace app\valueObjects;

class Cpf
{
    public ?string $cpf {
        get {
            return $this->cpf;
        }

        set(?string $value) {
            $this->cpf = $value;
        }
    }
}
