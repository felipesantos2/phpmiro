<?php

namespace app\controllers;

use app\controllers\Controller;

class WelcomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        echo '<br>WelcomeController<br>';
    }

}
