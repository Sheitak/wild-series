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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category/form' => [[['_route' => 'category_form', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/episodes' => [[['_route' => 'episodes_index', '_controller' => 'App\\Controller\\EpisodesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episodes/new' => [[['_route' => 'episodes_new', '_controller' => 'App\\Controller\\EpisodesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/program' => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], null, ['GET' => 0], null, true, false, null]],
        '/program/new' => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wild' => [
            [['_route' => 'wild_wild_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, true, false, null],
            [['_route' => 'wild_show_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, true, false, null],
            [['_route' => 'wild_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, false, false, null],
        ],
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
                .'|/episodes/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/program/([^/]++)(?'
                    .'|(*:240)'
                    .'|/edit(*:253)'
                    .'|(*:261)'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:289)'
                    .'|/edit(*:302)'
                    .'|(*:310)'
                .')'
                .'|/wild/(?'
                    .'|s(?'
                        .'|how(?:/([a-z0-9-]+))?(*:353)'
                        .'|eries(?:/([a-z0-9-]+))?(*:384)'
                        .'|aison(?:/([0-9]+))?(*:411)'
                    .')'
                    .'|category(?:/([a-z]+))?(*:442)'
                    .'|episode(?:/([0-9]+))?(*:471)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'episodes_show', '_controller' => 'App\\Controller\\EpisodesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'episodes_edit', '_controller' => 'App\\Controller\\EpisodesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'episodes_delete', '_controller' => 'App\\Controller\\EpisodesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        240 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        289 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        353 => [[['_route' => 'wild_show', 'slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['slug'], null, null, false, true, null]],
        384 => [[['_route' => 'wild_series', 'programName' => null, '_controller' => 'App\\Controller\\WildController::showByProgram'], ['programName'], null, null, false, true, null]],
        411 => [[['_route' => 'wild_season', 'id' => null, '_controller' => 'App\\Controller\\WildController::showBySeason'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'wild_show_category', 'categoryName' => null, '_controller' => 'App\\Controller\\WildController::showByCategory'], ['categoryName'], null, null, false, true, null]],
        471 => [
            [['_route' => 'wild_episode', 'id' => null, '_controller' => 'App\\Controller\\WildController::showByEpisode'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
