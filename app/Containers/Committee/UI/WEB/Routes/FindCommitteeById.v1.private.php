<?php

/** @var Route $router */
$router->get('committees/{id}', [
    'as' => 'web_committee_show',
    'uses'  => 'Controller@show',
//    'middleware' => [
//      'auth:web',
//    ],
]);
