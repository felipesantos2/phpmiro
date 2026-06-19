<?php

namespace core\library;

final class Hydrate
{
    public static function execute(string $class, array $data = []): object
    {

        $instance = new $class;

        foreach ($data as $key => $value) {
            if (property_exists($instance, $key)) {
                $instance->$key = $value;
            }
        }

        return $instance ?? null;
    }
}
