<?php

namespace app\controllers;

use app\dtos\CreateUserDTO;
use app\services\CreateUserService;
use app\valueObjects\Cpf;
use app\valueObjects\Email;

class UserController extends Controller
{
    public function index(): mixed
    {
        $userDTO = new CreateUserDTO(
            'Felipe',
            new Email('santospinheiro6@gmail.com'),
            new Cpf('12315466799'),
            '123456789',
            0,
        );
        // chama a service

        $userService = new CreateUserService;

        $created = $userService->createUser($userDTO);

        // view
        // faz retorno de uma view ou outra resposta

        return null;
    }
}
