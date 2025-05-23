<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TlHbUirService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.tlHbUir' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tlHbUir'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commRepo' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'membreRepository' => ['privates', 'App\\Repository\\MembreRepository', 'getMembreRepositoryService', true],
            'prodRepo' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'walletRepository' => ['privates', 'App\\Repository\\WalletRepository', 'getWalletRepositoryService', true],
        ], [
            'commRepo' => 'App\\Repository\\CommandeRepository',
            'em' => '?',
            'membreRepository' => 'App\\Repository\\MembreRepository',
            'prodRepo' => 'App\\Repository\\ProduitRepository',
            'walletRepository' => 'App\\Repository\\WalletRepository',
        ]);
    }
}
