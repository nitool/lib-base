<?php declare(strict_types=1);

namespace Lib\BaseBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ExampleCommand extends Command
{
    protected function configure()
    {
        $this->setName('lib:base:example');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('> example output');

        return 0;
    }
}

