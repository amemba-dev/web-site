<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntrepriseRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\EntrepriseRepository' shared autowired service.
     *
     * @return \App\Repository\EntrepriseRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\EntrepriseRepository'] = new \App\Repository\EntrepriseRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
