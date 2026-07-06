<?php

declare(strict_types=1);

namespace app\controllers;

use core\Load;
use core\View;

class WelcomeController extends Controller
{
    public function __construct() {}

    public function index(): void
    {
        $page = 'welcome';

        require __DIR__ . '/../views/app-layout.php';
    }

    public function index2(): ?View
    {
        return Load::view('welcome');
    }
}
