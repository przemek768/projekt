<?php

namespace ContainerRzVQB5u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_EnvVarProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarProcessor.php';

        return $container->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($container, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['secrets.vault'] ?? $container->load('getSecrets_VaultService'));
        }, 1));
    }
}
