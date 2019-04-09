<?php

$router->group(['domain' => config('app.url')], function () use ($router) {
    $router->get('/', [
        'uses' => 'Controller@index'
    ]);

    $router->get('create', [
        'uses' => 'Controller@create'
    ]);

    $router->post('create', [
        'uses' => 'Controller@store'
    ]);

    $router->post('check_domain', [
        'uses' => 'Controller@checkDomain',
        'as' => 'domain.check'
    ]);

    $router->get('setcookie', [
        'uses' => 'Controller@setCookie',
        'as' => 'cookie.set'
    ]);
});
