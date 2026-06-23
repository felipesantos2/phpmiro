<?php

declare(strict_types=1);

namespace core\library\generators;

class GeneratorEntityClass
{
    public static function make(array $data = []): ?string
    {
        $name = $data['name'];

        $basic = <<<CLASS
            <?php

            namespace app\entities;

            class {$name} extends Entity {}
        CLASS;

        return $basic;
    }
}
