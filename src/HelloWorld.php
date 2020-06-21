<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Shows a HelloWorld default message')
            ->addArgument('name')
            ->addArgument('givenName');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello world ' . $input->getArgument('givenName') . ', ' . $input->getArgument('name') . '.');
        return 0;
    }
}