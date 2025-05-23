<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminPartenaireControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminPartenaireController' shared autowired service.
     *
     * @return \App\Controller\AdminPartenaireController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminPartenaireController'] = $instance = new \App\Controller\AdminPartenaireController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Repository\\PartenaireRepository'] ?? $container->load('getPartenaireRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AdminPartenaireController', $container));

        return $instance;
    }
}
