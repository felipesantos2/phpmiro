<?php

declare(strict_types=1);

namespace app\traits;

use core\support\Twig;

trait View
{
    private function twig()
    {
        return (new Twig())->loadTwig();
    }

    public function render(string $view, array $data = [])
    {
        return $this->twig()->load(str_replace('.', '/', $view . 'html'))
            ->display($data);
    }
}
