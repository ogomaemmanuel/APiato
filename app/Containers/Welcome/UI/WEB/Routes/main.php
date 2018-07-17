<?php

$router->get('/mtt', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);
