<?php

namespace Lib\BaseBundle\Tests\Command;

final class ExampleCommandTest extends AbstractCommandTest
{
    public function testExecuting(): void
    {
        $result = $this->executeCommand('lib:base:example');
        $this->assertStringContainsStringIgnoringCase(
            'example output',
            $result->getOutput()
        );
    }
}

