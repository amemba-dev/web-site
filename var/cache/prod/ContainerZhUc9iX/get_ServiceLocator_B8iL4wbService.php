<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B8iL4wbService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.B8iL4wb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B8iL4wb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'letterRepo' => ['privates', 'App\\Repository\\LetterRepository', 'getLetterRepositoryService', true],
        ], [
            'letterRepo' => 'App\\Repository\\LetterRepository',
        ]);
    }
}
