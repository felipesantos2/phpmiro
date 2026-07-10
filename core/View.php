<?php

declare(strict_types=1);

namespace core;

use Exception;

/**
 * This class resolves and load a view file
 */
class View
{
    public function __construct(
        private string $view,
        private array $data
    ) {

        $path = $this->name();

        if (! file_exists($path)) {
            throw new Exception('View File Not Found');
        }

        $this->load($path);
    }

    /**
     * Normalize View Path
     *  ex: pages.photos to pages/fotos
     */
    private function name(): string
    {
        $viewPath = $this->view;

        if (strlen($viewPath) <= 2) {
            throw new Exception('Path is very Short');
        }

        $fixedPath = str_replace('.', '/', $viewPath);

        $fullPath = dirname(__FILE__)
            . '/../app/views/'
            . $fixedPath
            . '.php';

        return $fullPath;
    }

    /**
     * Load the View File
     */
    private function load(string $path): void
    {
        $data = $this->data;

        extract($data);

        include $path;
    }
}
