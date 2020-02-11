<?php

namespace Lib\BaseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Lib\BaseBundle\DependencyInjection\LibBaseExtension;

class LibBaseBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->registerExtension(new LibBaseExtension());
    }
}

