<?php

declare(strict_types=1);

namespace app\valueObjects;

final class Cpf
{
    public function __construct(private ?string $cpf) {}

    public function getCPF(): ?string
    {
        return $this->cpf;
    }
}
