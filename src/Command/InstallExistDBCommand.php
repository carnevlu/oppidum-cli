<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TimeCommand extends Command
{
    protected function configure()
    {
        $this->setName('time')
                ->setDescription('Shows current date and time')
                ->setHelp('This command prints the current date and time');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = new Question("Enter your name: ", "guest");

        $name = $helper->ask($input, $output, $question);
        $message = sprintf("Hello %s!", $name);

        $output->writeln($message);

        $now = date('c');
        $message = sprintf("Current date and time: %s", $now);

        $output->writeln($message);

        return 1;
    }
}