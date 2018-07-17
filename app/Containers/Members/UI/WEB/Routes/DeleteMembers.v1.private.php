<?php

/** @var Route $router */
$router->delete('members/{id}', [
    'as' => 'web_members_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
