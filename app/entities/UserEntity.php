<?php

namespace app\entities;

use DateTime;

class UserEntity extends Entity
{
    public ?int $id = null;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $password = null;

    public int|string|null $status = null;

    public DateTime|string|null $createdAt = null;

    public function __construct(
    ) {
        // $this->normalize();
    }

    // private function normalize(): void
    // {
    //     $this->status = (int) $this->status;

    //     $this->createdAt = $this->createdAt instanceof DateTime ?
    //         $this->createdAt->format('Y-m-d H:i:s') :
    //         $this->createdAt;

    //     $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    //     $this->email = strtolower($this->email);
    //     $this->name = ucfirst(trim($this->name));
    // }

}
