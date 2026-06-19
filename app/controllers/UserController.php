<?php

namespace app\controllers;

use app\models\User;

class UserController extends Controller
{
    public function __construct() {}

    public function index()
    {

        dd(new User()->all());
        // finalizar o método update do Model
    }
}
