<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UfiKPnZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.UfiKPnZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UfiKPnZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cotisationRipo' => ['privates', 'App\\Repository\\CotisationRepository', 'getCotisationRepositoryService', true],
            'pay' => ['privates', '.errored.XTDldq_', NULL, 'Cannot determine controller argument for "App\\Controller\\CotisationController::make()": the $pay argument is type-hinted with the non-existent class or interface: "App\\Service\\PayTech\\Payement".'],
        ], [
            'cotisationRipo' => 'App\\Repository\\CotisationRepository',
            'pay' => '?',
        ]);
    }
}
