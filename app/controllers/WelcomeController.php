<?php

declare(strict_types=1);

namespace app\controllers;

use core\View;

class WelcomeController extends Controller
{
    public function __construct() {}

    public function index(): View
    {
        return view('page.contato', ['teste' => 'Page1']);
    }
}
