<?php 

namespace Lib\BaseBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder() 
    {
        $treeBuilder = new TreeBuilder('lib_base');
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('mode')->end()
            ->end();

        return $treeBuilder;
    }
}

