<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminEmploisControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminEmploisController' shared autowired service.
     *
     * @return \App\Controller\AdminEmploisController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminEmploisController'] = $instance = new \App\Controller\AdminEmploisController(($container->privates['App\\Repository\\OffreEmploisRepository'] ?? $container->load('getOffreEmploisRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AdminEmploisController', $container));

        return $instance;
    }
}
