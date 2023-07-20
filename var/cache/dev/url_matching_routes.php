<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, true, false, null]],
        '/author/new' => [[['_route' => 'app_newauthor', '_controller' => 'App\\Controller\\AuthorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/books' => [[['_route' => 'app_books', '_controller' => 'App\\Controller\\BooksController::index'], null, null, null, true, false, null]],
        '/books/new' => [[['_route' => 'app_newbook', '_controller' => 'App\\Controller\\BooksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/publisher' => [[['_route' => 'app_publisher', '_controller' => 'App\\Controller\\PublisherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/publisher/new' => [[['_route' => 'app_newpublisher', '_controller' => 'App\\Controller\\PublisherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/author/(?'
                    .'|edit/([^/]++)(*:193)'
                    .'|delete/([^/]++)(*:216)'
                .')'
                .'|/books/(?'
                    .'|edit/([^/]++)(*:248)'
                    .'|delete/([^/]++)(*:271)'
                .')'
                .'|/publisher/(?'
                    .'|edit/([^/]++)(*:307)'
                    .'|delete/([^/]++)(*:330)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'app_author_edit', '_controller' => 'App\\Controller\\AuthorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        216 => [[['_route' => 'app_author_delete', '_controller' => 'App\\Controller\\AuthorController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'app_book_edit', '_controller' => 'App\\Controller\\BooksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        271 => [[['_route' => 'app_book_delete', '_controller' => 'App\\Controller\\BooksController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'app_publisher_edit', '_controller' => 'App\\Controller\\PublisherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        330 => [
            [['_route' => 'app_publisher_delete', '_controller' => 'App\\Controller\\PublisherController::delete'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
