<?php

/** @var Route $router */
$router->get('committees/create', [
    'as' => 'web_committee_create',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
