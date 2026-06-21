<?php

namespace app\controllers;

use app\dtos\CreateUserDTO;
use app\models\User;
use app\ValueObjects\Cpf;
use app\ValueObjects\Email;

class UserController extends Controller
{
    private ?CreateUserDTO $userDTO = null;

    public function index()
    {

        $user = $this->userDTO = new CreateUserDTO(
            'Felipe',
            new Email('santospinheiro6@gmail.com'),
            new Cpf('12315466799'),
            '123456789',
            0,
        );

        dd($user);

        $data = [
            'name'     => 'Felipe Pinheiro dos Santos',
            'email'    => 'felipe@email.com',
            'password' => '123456789',
            'status'   => 1,
        ];

        $user = new User;

        $user->update(new User()->first(), $data); // data por ser array on Entity

        dd($user, new User()->find('Felipe', 'name'));

        // finalizar o método update do Model
    }
}
