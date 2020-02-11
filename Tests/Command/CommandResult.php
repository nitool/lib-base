<?php

namespace Lib\BaseBundle\Tests\Command;

class CommandResult
{
    /**
     * @var int
     */
    private $statusCode;

    /**
     * @var string
     */
    private $output;

    public function __construct(int $statusCode, string $output)
    {
        $this->statusCode = $statusCode;
        $this->output = $output;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getOutput(): string
    {
        return $this->output;
    }
}

