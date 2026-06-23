<?php

declare(strict_types=1);

namespace core\library\generators;

class GeneratorControllerClass
{
    public static function make(array $data = []): ?string
    {
        $name = $data['name'];

        $basic = <<<CLASS
            <?php

            namespace app\controllers;

            class {$name} extends Controller {}
        CLASS;

        return $basic;
    }
}
