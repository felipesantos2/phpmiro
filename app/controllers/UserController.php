<?php

declare(strict_types=1);

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
            'Felipe Pinheiro dos Santos',
            new Email('santospinheiro6@gmail.com'),
            new Cpf('12315466799'),
            '123456789',
            0,
        );

        $userService = new CreateUserService();

        $created = $userService->createUser($userDTO);

        // view
        // faz retorno de uma view ou outra resposta

        return null;
    }
}
