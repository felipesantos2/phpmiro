<?php

declare(strict_types=1);

namespace core\support;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Twig
{
    private $twig;

    private array $functions = [];

    public function loadTwig()
    {
        $loader = new FilesystemLoader(TEMPLATE_PATH);

        $this->twig = new Environment($loader, [
            'cache'       => CACHE_PATH,
            'auto_reload' => true,
        ]);

        return $this->twig;
    }
}
