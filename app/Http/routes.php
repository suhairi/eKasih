<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'middleware'    => ['auth'],
    'uses'          => 'WelcomeController@index'
]);

Route::get('home', [
    'middleware'    => ['auth', 'roles'],
    'roles'         => ['root', 'administrator', 'manager', 'company manager', 'user'],
    'uses'          => 'HomeController@index',
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('user/{user}', [
    'middleware'    => ['auth', 'roles'],
    'uses'          => 'UserController@index',
    'roles'         => ['administrator', 'manager'],
]);
