<?php

$router->group(['prefix'=>config('apiato.admin.prefix')], function($router){
    $router->get('/login', [
        'as'   => 'get_admin_login_page',
        'uses' => 'Controller@showLoginPage',
        'prefix' => config('apiato.admin.prefix'),
    ]);
});

