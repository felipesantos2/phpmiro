<?php

declare(strict_types=1);

namespace core;

class View
{
    public function __construct(
        private string $view,
        private array $data
    ) {
        if ($this->viewExists()) {
            $this->loadView();
        }
    }

    private function viewName(): string
    {
        return __DIR__ . '/' . $this->view . '.php';
    }

    private function viewExists(): ?bool
    {
        return file_exists($this->viewName()) ?? null;
    }

    private function loadView(): void
    {
        $data = $this->data;

        include $this->viewName();
    }
}

class ViewLoader
{
    public static function view(string $view, array $data = []): View
    {
        return new View($view, $data);
    }
}
