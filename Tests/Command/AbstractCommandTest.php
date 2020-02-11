<?php

namespace Lib\BaseBundle\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

abstract class AbstractCommandTest extends KernelTestCase
{
    public function setUp(): void
    {
        static::$kernel = static::createKernel();
    }

    private function prepareOptions(array $options): array
    {
        $prepared = [];
        foreach($options as $name => $value) {
            $prepared[\sprintf('--%s', $name)] = $value;
        }

        return $prepared;
    }

    protected function executeCommand(
        string $name,
        array $arguments = [],
        array $options = []
    ): CommandResult
    {
        $application = new Application(static::$kernel);
        $command = $application->find($name);
        $commandTester = new CommandTester($command);
        $statusCode = $commandTester->execute(
            $arguments + $this->prepareOptions($options)
        );

        return new CommandResult($statusCode, $commandTester->getDisplay());
    }
}

