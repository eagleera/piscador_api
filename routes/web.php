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
//TIPOS
Route::get('/tipos', ['as'=> 'index roles', 'uses'=>'RolesController@indexTipos']);
//ROLES
Route::get('/roles', ['as'=> 'index roles', 'uses'=>'RolesController@index']);
Route::post('/rol', ['as'=> 'create new rol', 'uses'=>'RolesController@store']);
Route::patch('/rol/{id}', ['as'=> 'update a rol', 'uses'=>'RolesController@edit']);
Route::delete('/rol/{id}', ['as'=> 'delete a rol', 'uses'=>'RolesController@delete']);
//WORKERS
Route::get('/workers', ['as'=> 'index workers', 'uses'=>'WorkersController@index']);
Route::post('/worker', ['as'=> 'create new worker', 'uses'=>'WorkersController@store']);
Route::patch('/worker/{id}', ['as'=> 'update a worker', 'uses'=>'WorkersController@edit']);
Route::delete('/worker/{id}', ['as'=> 'delete a worker', 'uses'=>'WorkersController@delete']);
//ATTENDANCE
Route::get('/attendance/payday', ['as'=> 'get attendance between two dates', 'uses'=>'AttendanceController@indexRange']);
Route::get('/attendance/{fecha}', ['as'=> 'get attendance of one date', 'uses'=>'AttendanceController@index']);
Route::post('/attendance', ['as'=> 'post an attendance', 'uses'=>'AttendanceController@store']);
//JOURNAL
Route::get('/journals', ['as'=> 'index journals', 'uses'=>'JournalController@index']);
Route::post('/journal', ['as'=> 'create new journal', 'uses'=>'JournalController@store']);
Route::patch('/journal/{id}', ['as'=> 'update a journal', 'uses'=>'JournalController@edit']);
Route::delete('/journal/{id}', ['as'=> 'delete a journal', 'uses'=>'JournalController@delete']);
//RANCH
Route::post('/ranch', ['as'=> 'create new ranch', 'uses'=>'RanchController@store']);
Route::post('/ranch/add-invite', ['as'=> 'create new ranch', 'uses'=>'RanchController@storeInvite']);
Route::post('/ranch/create-invite', ['as'=> 'create new ranch', 'uses'=>'RanchController@createInvite']);
//USER
Route::post('/register', ['as'=> 'register user', 'uses'=>'AuthController@register']);
Route::post('/login', ['as'=> 'login user', 'uses'=>'AuthController@login']);