<?php

require __DIR__ . '/vendor/autoload.php';

use App\Command\InstallExistDBCommand;
//use App\Command\BooksCommand;
//use App\Command\ColorCommand;
//use App\Command\AskNameCommand;
//use App\Command\MessageCommand;
use Symfony\Component\Console\Application;

$app = new Application();

//$app->add(new MessageCommand());
$app->add(new InstallExistDBCommand());
$app->add(new InstallOppidumCommand());

$app->run();
