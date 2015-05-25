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

Route::get('/', 'HomeController@index');

Route::get('/login', 'HomeController@getLogin');
Route::post('/login', 'HomeController@postLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/dashboard', 'DashboardController@index');

/*
 *  #############   ROOT   ####################
 */

Route::get('/root', 'RootController@index');


/*
 *  #############   ADMINISTRATOR   ####################
 */

Route::get('/administrator', 'AdministratorController@index');


/*
 *  #############   MANAGER   ####################
 */

Route::get('/manager', 'CManagerController@index');


/*
 *  #############   COMPANY MANAGER   ####################
 */

Route::get('/cmanager', 'CManagerController@index');


/*
 *  #############   USER   ####################
 */

Route::get('/user', 'UserController@index');

