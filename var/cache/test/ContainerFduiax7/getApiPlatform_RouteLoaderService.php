<?php

namespace ContainerFduiax7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_RouteLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.route_loader' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/ApiLoader.php';

        return $container->privates['api_platform.route_loader'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.operation_path_resolver.custom'] ?? $container->getApiPlatform_OperationPathResolver_CustomService()), $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], ($container->privates['api_platform.subresource_operation_factory.cached'] ?? $container->getApiPlatform_SubresourceOperationFactory_CachedService()), false, true, true, false, false, ($container->privates['api_platform.identifiers_extractor.cached'] ?? $container->getApiPlatform_IdentifiersExtractor_CachedService()));
    }
}
