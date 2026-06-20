<?php

namespace core\library\generators;

class GeneratorModelClass
{
    public static function make(array $data = []): ?string
    {
        $name = $data['name'];

        $basic = <<<CLASS
            <?php

            namespace app\models;

            class {$name} extends Model {}

        CLASS;

        return $basic;
    }
}
