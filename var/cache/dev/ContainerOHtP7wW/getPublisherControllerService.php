<?php

namespace ContainerOHtP7wW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublisherControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PublisherController' shared autowired service.
     *
     * @return \App\Controller\PublisherController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PublisherController.php';

        $container->services['App\\Controller\\PublisherController'] = $instance = new \App\Controller\PublisherController();

        $instance->setContainer(($container->privates['.service_locator.ghRfMDm'] ?? $container->load('get_ServiceLocator_GhRfMDmService'))->withContext('App\\Controller\\PublisherController', $container));

        return $instance;
    }
}
