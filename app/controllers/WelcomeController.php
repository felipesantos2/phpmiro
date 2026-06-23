<?php

declare(strict_types=1);

namespace app\controllers;

class WelcomeController extends Controller
{
    public function __construct() {}

    public function index()
    {
        echo '<br>WelcomeController<br>';
    }
}
