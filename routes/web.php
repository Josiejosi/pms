<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', 'AdminController@index');

Route::get('users', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::post('user/store', 'UserController@store');
Route::get('user/destroy/{id}', 'UserController@destroy');
Route::get('profile', 'UserController@profile');
Route::get('user/role/{id}', 'UserController@role');
Route::post('user/role/store', 'UserController@store_role');
Route::get('user/pdf', "UserController@pdf");
Route::post('user/profile/store', "UserController@user_profile");

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

Route::get('logout', function() {
	auth()->logout() ;
	return redirect("/") ;
});

Route::get('manual_roles_and_permissions', function() {

/*	$admin 			= Role::create(['name' => 'Admin']);
	$management 	= Role::create(['name' => 'Management']);
	$employee 		= Role::create(['name' => 'Employee']);

	Permission::create(['name' => 'view dashboard']);
	Permission::create(['name' => 'update profile']);
	Permission::create(['name' => 'manage tasks']);
	Permission::create(['name' => 'view report']);
	Permission::create(['name' => 'manage users']);
	Permission::create(['name' => 'manage rewards']);
	Permission::create(['name' => 'manage permissions']);

	$admin->givePermissionTo( 'view dashboard', 'manage users', 'manage permissions', 'update profile' ) ;
	$management->givePermissionTo( 'view dashboard', 'view report', 'manage rewards', 'manage tasks', 'update profile' ) ;
	$employee->givePermissionTo( 'view dashboard', 'update profile' ) ;*/

    $user = \App\Models\User::create([
    		"name" => "Promise",
    		"email" => "admin@gmail.com",
    		"password" => bcrypt( "Admin@123" ) ,
    ]) ;

    $user->assignRole( "Admin" ) ;

	return redirect("/") ;
});
