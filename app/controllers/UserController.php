<?php

namespace app\controllers;

use app\controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'Hello World';
    }

}
