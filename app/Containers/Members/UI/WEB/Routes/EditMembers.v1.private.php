<?php

/** @var Route $router */
$router->get('members/{id}/edit', [
    'as' => 'web_members_edit',
    'uses'  => 'Controller@edit',
//    'middleware' => [
//      'auth:web',
//    ],
]);
