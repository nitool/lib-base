<?php declare(strict_types=1);

namespace Lib\BaseBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

final class ExampleCommand extends Command
{
    /**
     * @var string
     */
    private $mode = '';

    public function __construct(ParameterBagInterface $parameters)
    {
        $this->mode = $parameters->get('lib_base_mode');

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('lib:base:example');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('> example output');
        $output->writeln(sprintf('> lib mode %s', $this->mode));

        return 0;
    }
}

