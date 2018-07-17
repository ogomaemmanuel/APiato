<?php

/** @var Route $router */
$router->get('committees/{id}/edit', [
    'as' => 'web_committee_edit',
    'uses'  => 'Controller@edit',
//    'middleware' => [
//      'auth:web',
//    ],
]);
