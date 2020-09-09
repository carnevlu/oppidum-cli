<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InstallOppidumCommand extends Command
{
    protected function configure()
    {
        $this->setName('install-existdb')
                ->setDescription('Install a local eXist-DB by version')
                ->setHelp('This command allow you to download and install ');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        //demo.sh or test.sh or ?
        //                                                /
        //                                           no
        //                                           /
        //                                           init ----I have data to restore ?
        //    \
        //    yes
        //    \
        //    ./bin/backup.sh ..... full...zip
        //                                                restore.sh


        // 1. try to find the current location
        // 2. check the projects folder
        // 2.1 If there clone oppidum
        // 2.2 Ask which repo clone (app project)
        // 3. run the post install process "init.sh"
        // 4. ask if restore a backup
        // 4.1 ask the location of the backup
        // 4.2 restore process
        // 4.3 run restore.sh
        // 4.-1 run bootstrap.sh
        $output->writeln("Work in progress");




        return 1;
    }
}