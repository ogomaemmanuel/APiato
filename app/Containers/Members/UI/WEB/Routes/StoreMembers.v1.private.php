<?php

/** @var Route $router */
$router->post('members/store', [
    'as' => 'web_members_store',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);
