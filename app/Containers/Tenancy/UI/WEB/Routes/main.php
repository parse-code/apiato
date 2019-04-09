<?php

$router->group(['domain' => config('app.url'), 'prefix' => 'tenancy'], function () use ($router) {
    $router->get('/', [
        'uses' => 'Controller@index'
    ]);

    $router->get('/create', [
        'uses' => 'Controller@create',
        'as' => 'tenancy.create'
    ]);

    $router->post('/create', [
        'uses' => 'Controller@store',
        'as' => 'tenancy.store'
    ]);
});
