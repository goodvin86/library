<?php

namespace Container7LlCP4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBadAuthor_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\BadAuthor.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\BadAuthor.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:delauthor', ['app:del-author'], 'Удаление авторов без книг', false, #[\Closure(name: 'App\\Command\\BadAuthor')] fn (): \App\Command\BadAuthor => ($container->privates['App\\Command\\BadAuthor'] ?? $container->load('getBadAuthorService')));
    }
}
