<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jj9JCDZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Jj9JCDZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jj9JCDZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'catRepo' => ['privates', 'App\\Repository\\CategorieProduitRepository', 'getCategorieProduitRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'prodRepo' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'catRepo' => 'App\\Repository\\CategorieProduitRepository',
            'paginator' => '?',
            'prodRepo' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
