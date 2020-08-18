<?php declare(strict_types=1);

namespace Lib\BaseBundle\Tests\DependencyInjection;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BundleTest extends WebTestCase
{
    public function testConfiguration(): void
    {
        $kernel = self::bootKernel();
        $this->assertTrue($kernel->getContainer()->hasParameter('lib_base_mode'));
        $this->assertEquals('dev', $kernel->getContainer()->getParameter('lib_base_mode'));
    }    
}

