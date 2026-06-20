<?php

namespace app\controllers;

use app\models\User;

class UserController extends Controller
{
    public function __construct() {}

    public function index()
    {
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
