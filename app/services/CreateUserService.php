<?php

namespace app\services;

use app\dtos\DTO;
use app\entities\UserEntity;
use app\models\User;

class CreateUserService extends DTO
{
    public function __construct() {}

    public function createUser(DTO $user): string
    {
        $entity = new UserEntity($user);

        $model = new User;

        $model->create($entity);
    }
}
