<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', 'AdminController@index');

Route::get('users', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::post('user/store', 'UserController@store');
Route::get('user/destroy/{id}', 'UserController@destroy');
Route::get('profile', 'UserController@profile');
Route::get('user/role/{$id}', 'UserController@role');
Route::get('user/pdf', "UserController@pdf");

Route::get('rewards', 'RewardController@index');
Route::get('reward/create', 'RewardController@create');
Route::post('reward/store', 'RewardController@store');
Route::get('reward/destroy/{id}', 'RewardController@destroy');
Route::get('rewards/pdf', 'RewardController@pdf');

Route::get('tasks', 'TaskController@index');
Route::get('task/create', 'TaskController@create');
Route::post('task/store', 'TaskController@store');
Route::get('task/destroy/{id}', 'TaskController@destroy');
Route::get('task/review/{id}', 'TaskController@review');
Route::get('task/complete/{id}', 'TaskController@complete');
Route::get('task/note/{id}', 'TaskController@note');
Route::get('tasks/pdf', 'TaskController@pdf');

Route::post('task/note/store', 'TaskController@notes_store');

Route::get('reports', 'ReportsController@index');


Route::get('roles_and_permissions', 'RolesController@index');
Route::post('role/store', 'RolesController@role');
Route::post('permission/store', 'RolesController@permision');

Auth::routes();

Route::get('logout', function(){
	auth()->logout() ;
	return redirect("/") ;
});
