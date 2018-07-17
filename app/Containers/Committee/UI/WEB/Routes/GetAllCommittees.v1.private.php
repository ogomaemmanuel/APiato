<?php

/** @var Route $router */
$router->get('committees', [
    'as' => 'web_committee_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
