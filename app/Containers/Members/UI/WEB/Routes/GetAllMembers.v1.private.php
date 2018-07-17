<?php

/** @var Route $router */
$router->get('/', [
    'as' => 'web_members_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
