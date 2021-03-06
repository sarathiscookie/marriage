<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
| Functionality of dashboard
*/
/*View admin dashboard page*/
Route::get('/backend/dashboard', [
    'as'      => 'dashboard',
    'uses'    => 'AdminDashboardController@index'
]);

/*
|--------------------------------------------------------------------------
| Religion
|--------------------------------------------------------------------------
| Add edit delete functionality of religion
*/
/* List page of religion*/
Route::get('/backend/religions', [
    'as'      => 'religionsListPage',
    'uses'    => 'AdminReligionController@index'
]);

/* Data fetch for listing all religion data */
Route::get('/backend/religions/list', [
    'as'      => 'listReligion',
    'uses'    => 'AdminReligionController@show'
]);

/* Save religion data */
Route::post('/backend/religions', [
    'as'      => 'storeReligion',
    'uses'    => 'AdminReligionController@store'
]);

/* Delete religion */
Route::delete('/backend/religions/{id}', [
    'as'      => 'deleteReligion',
    'uses'    => 'AdminReligionController@destroy'
]);


Route::auth();
Route::get('/home', 'HomeController@index');

