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

Route::group([
    'middleware'    => ['auth', 'roles'],
    'roles'         => ['root'],
], function() {

    Route::get('/root', [
        'as' => 'root',
        'uses' => 'RootController@index',
    ]);

});

/*
 *  #############   ADMINISTRATOR   ####################
 */

Route::group([
    'middleware'    => ['auth', 'roles'],
    'roles'         => ['administrator'],
], function() {

    Route::get('/administrator', [
        'as' => 'administrator',
        'uses' => 'AdministratorController@index'
    ]);

});


/*
 *  #############   MANAGER   ####################
 */

Route::group([
    'middleware'    => ['auth', 'roles'],
    'roles'         => ['manager'],
], function() {

    Route::get('/manager', [
        'as'            => 'manager',
        'uses'          => 'CManagerController@index'
    ]);

});



/*
 *  #############   COMPANY MANAGER   ####################
 */

Route::group([
    'middleware'    => ['auth', 'roles'],
    'roles'         => ['cmanager'],
], function() {

    Route::get('/cmanager', [
        'as'            => 'cmanager',
        'uses'          => 'CManagerController@index'
    ]);

});


/*
 *  #############   USER   ####################
 */

Route::group([
    'middleware'    => ['auth', 'roles'],
    'roles'         => ['user'],
], function() {

    Route::get('/user', [
        'as' => 'administrator',
        'uses' => 'UserController@index'
    ]);

});

