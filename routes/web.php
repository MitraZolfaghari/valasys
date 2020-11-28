<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|-+------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.view_login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login');
    Route::get('/', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/logout', 'Admin\AdminController@logout')->name('admin.logout');

    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('menus', 'MenuController');
    Route::resource('academies', 'AcademyController');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/{user}/roles', 'UserController@showRoleForm')->name('role');
        Route::post('/{user}/roles', 'UserController@assignRole');
    });

});
