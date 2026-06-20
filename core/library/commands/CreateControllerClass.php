<?php

namespace core\library\commands;

use core\library\generators\GeneratorControllerClass;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'make:controller',
    description: 'Command that create a basic controller class',
)]
class CreateControllerClass extends Command
{
    private string $name = 'controller-name';

    protected function configure(): void
    {
        $this
            ->addArgument($this->name, InputArgument::REQUIRED, 'Controller Name');
        // ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg = ucfirst((string) $input->getArgument($this->name));

        if (! str_ends_with($arg, 'controller')) {
            $arg = str_replace('c', 'C', $arg);
        }

        $controller = GeneratorControllerClass::make([
            'name'    => $arg,
            'methods' => true,
        ]);

        // if ($input->getOption('option1')) {
        //     // ... handle option logic
        // }

        // $io->success('You have a new command that you can trigger from the console!');

        $io->note(sprintf('You passed an argument: %s', $arg));
        // $io->note($controller);

        return Command::SUCCESS;
    }
}
