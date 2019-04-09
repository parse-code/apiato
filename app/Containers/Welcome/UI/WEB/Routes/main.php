<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);

$router->get('/form', [
    'as'   => 'show_form',
    'uses' => 'Controller@showForm',
]);

