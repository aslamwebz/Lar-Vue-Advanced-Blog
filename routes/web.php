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

Route::get('/', 'PostController@indexHome');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
	Route::get('/', 'ManageController@index');
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
	Route::resource('/users', 'UserController');
	Route::resource('/permission', 'PermissionController', ['except' => 'destroy']);
	Route::resource('/role', 'RoleController', ['except' => 'destroy']);
    Route::get('/posts/create', ['middleware' => ['permission:create-posts']]);
	Route::resource('/posts', 'PostController');
});

Route::get('/home', 'HomeController@index')->name('home');
