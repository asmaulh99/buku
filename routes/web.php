<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return response()->json(["message"=>"API Buku"]);
});
$router->group(['prefix'=> 'api/v1/kategori'], function() use ($router){
    $router->get('/', ['uses'=>'KategoriController@index']);
    $router->get('/{id}', ['uses'=>'KategoriController@show']);
    $router->post('/', ['uses'=>'KategoriController@store']);
    $router->put('/{id}', ['uses'=>'KategoriController@update']);
    $router->delete('/', ['uses'=>'KategoriController@destroy']);
});
$router->group(['prefix'=> 'api/v1/buku'], function() use ($router){
    $router->get('/', ['uses'=>'BukuController@index']);
    $router->get('/{id}', ['uses'=>'BukuController@show']);
    $router->post('/', ['uses'=>'BukuController@store']);
    $router->put('/{id}', ['uses'=>'BukuController@update']);
    $router->delete('/', ['uses'=>'BukuController@destroy']);
});
$router->group(['prefix'=> 'api/v1/penerbit'], function() use ($router){
    $router->get('/', ['uses'=>'PenerbitController@index']);
    $router->get('/{id}', ['uses'=>'PenerbitController@show']);
    $router->post('/', ['uses'=>'PenerbitController@store']);
    $router->put('/{id}', ['uses'=>'PenerbitController@update']);
    $router->post('/', ['uses'=>'PenerbitController@destroy']);
});