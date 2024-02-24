<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');

Route::get('/client', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');

Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');

Route::post('/client/delete', 'ClientController@delete');


Route::get('/location', 'LocationController@index');
Route::get('/location/show', 'LocationController@show');

Route::get('/location/create', 'LocationController@create');
Route::post('/location/create', 'LocationController@store');

Route::get('/location/edit', 'LocationController@edit');
Route::post('/location/edit', 'LocationController@update');

Route::post('/location/delete', 'LocationController@delete');



Route::get('/voiture', 'VoitureController@index');
Route::get('/voiture/show', 'VoitureController@show');

Route::get('/voiture/create', 'VoitureController@create');
Route::post('/voiture/create', 'VoitureController@store');

Route::get('/voiture/edit', 'VoitureController@edit');
Route::post('/voiture/edit', 'VoitureController@update');

Route::post('/voiture/delete', 'VoitureController@delete');


Route::dispatch();
?>

