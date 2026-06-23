<?php

declare(strict_types=1);

namespace app\controllers;

use app\dtos\CreateUserDTO;
use app\exceptions\BasicErrorException;
use app\services\CreateUserService;
use app\valueObjects\Cpf;
use app\valueObjects\Email;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        try {
            $userDTO = new CreateUserDTO(
                'Felipe Pinheiro dos Santos',
                new Email('santospinheiro6gmail.com'),
                new Cpf('12315466799'),
                '123456789',
                0,
            );

            $userService = new CreateUserService();

            return $userService->createUser($userDTO);

        } catch (Exception|BasicErrorException $e) {
            http_response_code($e->statusCode());
            echo $e->render();

            return;
        }
    }
}
