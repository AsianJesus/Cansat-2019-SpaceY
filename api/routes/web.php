<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () {
    event(new \App\Events\ExampleEvent());
});

$router->get('/flights', 'FlightsController@getAll');
$router->post('/flights', 'FlightsController@add');
$router->get('/flights/{id}', 'FlightsController@getByID');
$router->delete('/flights/{id}', 'FlightsController@delete');
$router->put('flights/{id}/end', 'FlightsController@endFlight');
$router->put('/flights/{id}', 'FlightsController@update');