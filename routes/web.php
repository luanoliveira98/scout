<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// EQUIPES
$router->group(['prefix' => 'equipes'], function() use ($router) {
    $router->get('/',           'EquipeController@index');
    $router->post('/',          'EquipeController@store');
    $router->get('/{id}',       'EquipeController@show');
    $router->put('/{id}',       'EquipeController@update');
    $router->delete('/{id}',    'EquipeController@destroy');
});