<?php

namespace ContainerCfmnPF8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_TwigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/FilesystemCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/CoreExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/EscaperExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/OptimizerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/StagingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/ExtensionSet.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Template.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/TemplateWrapper.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SerializerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Impersonate/ImpersonateUrlGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/DumpExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';

        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));

        $container->services['.container.private.twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $b = ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());
        $e = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($container->has('.container.private.security.token_storage')) {
            $f->setTokenStorage($e);
        }
        if ($container->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, $d->getBaseUrl(), $d->isSecure())), new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($container->services['router'] ?? $container->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, $d)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SerializerExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? $container->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator($c, ($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService()), $e)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($container->services['var_dumper.cloner'] ?? $container->load('getVarDumper_ClonerService')), ($container->privates['var_dumper.html_dumper'] ?? $container->load('getVarDumper_HtmlDumperService'))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => ['privates', 'twig.runtime.serializer', 'getTwig_Runtime_SerializerService', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }
}
