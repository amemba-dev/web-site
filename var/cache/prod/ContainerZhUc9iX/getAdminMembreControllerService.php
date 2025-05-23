<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminMembreControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminMembreController' shared autowired service.
     *
     * @return \App\Controller\AdminMembreController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminMembreController'] = $instance = new \App\Controller\AdminMembreController(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AdminMembreController', $container));

        return $instance;
    }
}
