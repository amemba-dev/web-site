<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\LoginController' shared autowired service.
     *
     * @return \App\Controller\LoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LoginController'] = $instance = new \App\Controller\LoginController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LoginController', $container));

        return $instance;
    }
}
