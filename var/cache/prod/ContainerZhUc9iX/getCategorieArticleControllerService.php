<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieArticleControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CategorieArticleController' shared autowired service.
     *
     * @return \App\Controller\CategorieArticleController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CategorieArticleController'] = $instance = new \App\Controller\CategorieArticleController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\CategorieArticleController', $container));

        return $instance;
    }
}
