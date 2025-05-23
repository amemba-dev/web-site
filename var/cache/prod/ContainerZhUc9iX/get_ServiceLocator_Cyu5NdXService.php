<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cyu5NdXService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Cyu5NdX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Cyu5NdX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evRipo' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'evRipo' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
