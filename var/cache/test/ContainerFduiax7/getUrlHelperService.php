<?php

namespace ContainerFduiax7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUrlHelperService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';

        return $container->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()));
    }
}