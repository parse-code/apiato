<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);

$router->get('/calendar', [
    'as'   => 'show_calendar',
    'uses' => 'Controller@showCalendar',
]);
