<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|andidats(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:195)'
                                .'|(?:\\.([^/]++))?(*:218)'
                            .')'
                        .')'
                        .'|errors/([^/]++)(?'
                            .'|(*:246)'
                        .')'
                        .'|v(?'
                            .'|alidation_errors/([^/]++)(?'
                                .'|(*:287)'
                            .')'
                            .'|otes(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:329)'
                                .'|(?:\\.([^/]++))?(*:352)'
                            .')'
                        .')'
                        .'|session(?'
                            .'|_candidats(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:411)'
                                .'|(?:\\.([^/]++))?(*:434)'
                            .')'
                            .'|s_votes(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:479)'
                                .'|(?:\\.([^/]++))?(*:502)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:542)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        195 => [[['_route' => '_api_/candidats/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Candidat', '_api_operation_name' => '_api_/candidats/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        218 => [[['_route' => '_api_/candidats{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Candidat', '_api_operation_name' => '_api_/candidats{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        246 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        287 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        329 => [[['_route' => '_api_/votes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Vote', '_api_operation_name' => '_api_/votes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => '_api_/votes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Vote', '_api_operation_name' => '_api_/votes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => '_api_/session_candidats/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\SessionCandidat', '_api_operation_name' => '_api_/session_candidats/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => '_api_/session_candidats{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\SessionCandidat', '_api_operation_name' => '_api_/session_candidats{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => '_api_/sessions_votes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\SessionsVote', '_api_operation_name' => '_api_/sessions_votes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => '_api_/sessions_votes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\SessionsVote', '_api_operation_name' => '_api_/sessions_votes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        542 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
