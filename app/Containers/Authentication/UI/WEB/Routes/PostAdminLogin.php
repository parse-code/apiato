<?php

$router->post('/login', [
    'as'   => 'post_admin_login_form',
    'uses' => 'Controller@loginAdmin',
    'prefix' => config('apiato.admin.prefix'),
]);
