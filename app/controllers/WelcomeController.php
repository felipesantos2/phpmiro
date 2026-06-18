<?php

namespace app\controllers;

use app\controllers\Controller;
use app\models\User;

class WelcomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        // echo '<br>WelcomeController<br>';


        $user = new User();


        $user->create([
            'name' => 'Felipe Santos',
            'email' => 'santos@email.com',
            'password' => '123456',
            'status' => 0,
        ]);


        dd($user);
    }

}
