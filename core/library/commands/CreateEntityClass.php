<?php

declare(strict_types=1);

namespace core\library\commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'make:entity',
    description: 'Command that create a basic entity class',
)]
class CreateMigrationClass extends Command
{
    private string $name = 'entity-name';

    protected function configure(): void
    {
        $this->addArgument($this->name, InputArgument::REQUIRED, 'Entity Name');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg = ucfirst((string) $input->getArgument($this->name));

        return Command::SUCCESS;
    }
}
