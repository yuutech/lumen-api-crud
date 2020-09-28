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

$router->post('/contact', 'ContactController@create');
$router->get('/contact', 'ContactController@index');
$router->get('/contact/{id}', 'ContactController@show');
$router->put('/contact/{id}', 'ContactController@update');
$router->delete('/contact/{id}', 'ContactController@destroy');