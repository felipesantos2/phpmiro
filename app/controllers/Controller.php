<?php

namespace app\controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{

    public function __construct()
    {
        $loader = new FilesystemLoader(TEMPLATE_PATH);

        $twig = new Environment($loader, ['cache' => CACHE_PATH, 'debug' => true]);

        echo $twig->render('welcome.html.twig', ['name' => 'Fabien']);
    }

}
