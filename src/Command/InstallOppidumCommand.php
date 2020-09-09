<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InstallExistDBCommand extends Command
{
    protected function configure()
    {
        $this->setName('install-existdb')
                ->setDescription('Install a local eXist-DB by version')
                ->setHelp('This command allow you to download and install ');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //$helper = $this->getHelper('question');
        //$question = new Question("Enter your name: ", "guest");
        //
        //$name = $helper->ask($input, $output, $question);
        //$message = sprintf("Hello %s!", $name);
        //
        //$output->writeln($message);
        //
        //$now = date('c');
        //$message = sprintf("Current date and time: %s", $now);
        //
        //$output->writeln($message);

        $output->writeln("Work in progress");

        return 1;
    }
}