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

$router->group(['prefix' => 'api'], function () use ($router) {

  $router->get('teams', ['uses' => 'TeamController@index']);
  $router->get('team/{id}', ['uses' => 'TeamController@show']);

  $router->get('teaminfo/{id}', ['uses' => 'TeamController@teamInfo']);
  $router->get('games', ['uses' => 'GameController@index']);
  $router->get('allgames', ['uses' => 'GameController@fetchAll']);

  $router->get('game/{id}', ['uses' => 'GameController@show']);
  $router->post('game', ['uses' => 'GameController@store']);
  $router->put('game', ['uses' => 'GameController@store']);
  $router->delete('game/{id}', ['uses' => 'GameController@destroy']);
});


$router->get('/', function ()  {
  return view('app');
});