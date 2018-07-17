<?php

/** @var Route $router */
$router->delete('committees/{id}', [
    'as' => 'web_committee_delete',
    'uses'  => 'Controller@delete',
//    'middleware' => [
//      'auth:web',
//    ],
]);
