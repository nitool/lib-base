<?php declare(strict_types=1);

namespace Lib\BaseBundle\Tests;

use Symfony\Component\HttpKernel\Kernel as AbstractKernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBundle;
use Lib\BaseBundle\DependencyInjection\LibBaseExtension;

final class Kernel extends AbstractKernel
{
    public function registerBundles()
    {
        return [
            new \Lib\BaseBundle\LibBaseBundle(),
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        ];
    }

    public function getCacheDir(): string
    {
        return __DIR__ . '/../var/cache/';
    }

    public function getLogsDir()
    {
        return __DIR__ . '/../var/logs/';
    }

    public function registerContainerConfiguration(LoaderInterface $loader) 
    {
        // todo: implement
    }

    public function configureContainer(
        ContainerBuilder $container,
        LoaderInterface $loader
    )
    {
        // todo: implement
    }
}

