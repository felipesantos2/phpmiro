<?php

declare(strict_types=1);

namespace core\library\commands;

use core\library\generators\GeneratorModelClass;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'make:model',
    description: 'Command that create a basic model class',
)]
class CreateModelClass extends Command
{
    private string $name = 'model-name';

    protected function configure(): void
    {
        $this
            ->addArgument($this->name, InputArgument::REQUIRED, 'model Name');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg = ucfirst((string) $input->getArgument($this->name));

        $model = GeneratorModelClass::make([
            'name'    => $arg,
            'methods' => true,
        ]);

        return Command::SUCCESS;
    }
}
