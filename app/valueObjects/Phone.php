<?php

declare(strict_types=1);

namespace app\ValueObjects;

class Phone
{
    public function __construct(private ?string $phone) {}

    public function getPhone(): ?string
    {

        return $this->phone;
    }
}
