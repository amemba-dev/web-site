<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ARMsnXService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.aR_msnX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aR_msnX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepo' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'catRepo' => ['privates', 'App\\Repository\\CategorieArticleRepository', 'getCategorieArticleRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'articleRepo' => 'App\\Repository\\ArticleRepository',
            'catRepo' => 'App\\Repository\\CategorieArticleRepository',
            'paginator' => '?',
        ]);
    }
}
