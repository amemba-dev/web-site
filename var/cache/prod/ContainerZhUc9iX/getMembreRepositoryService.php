<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMembreRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MembreRepository' shared autowired service.
     *
     * @return \App\Repository\MembreRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MembreRepository'] = new \App\Repository\MembreRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
