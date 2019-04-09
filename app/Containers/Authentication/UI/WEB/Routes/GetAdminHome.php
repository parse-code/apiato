<?php

$router->get('/', [
    'as'   => 'get_admin_home_page',
    'uses' => 'Controller@showLoginPage',
    'prefix' => config('apiato.admin.prefix'),
]);
