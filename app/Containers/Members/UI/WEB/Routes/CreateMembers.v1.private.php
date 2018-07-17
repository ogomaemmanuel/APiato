<?php

/** @var Route $router */
$router->get('members/create', [
    'as' => 'web_members_create',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
