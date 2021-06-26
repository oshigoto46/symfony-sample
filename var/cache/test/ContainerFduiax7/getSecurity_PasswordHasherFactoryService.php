<?php

namespace ContainerFduiax7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_PasswordHasherFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.password_hasher_factory' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/PasswordHasherFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/PasswordHasherFactory.php';

        return $container->privates['security.password_hasher_factory'] = new \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory([]);
    }
}
