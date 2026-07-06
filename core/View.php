<?php

namespace core;


class ViewLoader
{
    public static function view(string $view, array $data = []): View
    {
        return new View($view, $data);
    }
}

class View
{
    public function __construct(private string $view, private array $data)
    {
        $filePath = __DIR__ . '/' . $view .'.php';
        if(file_exists($filePath )) {
            include $filePath;
        }
    }

    private function viewExists(): bool
    {
        include $filePath;
    }

    private function load()
    {
        include $filePath;
    }
}
