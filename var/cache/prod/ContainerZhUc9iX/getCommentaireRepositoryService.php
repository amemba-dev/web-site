<?php

namespace ContainerZhUc9iX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentaireRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CommentaireRepository' shared autowired service.
     *
     * @return \App\Repository\CommentaireRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CommentaireRepository'] = new \App\Repository\CommentaireRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
