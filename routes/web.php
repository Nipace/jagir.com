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
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
	Route::resource('user', 'User\UserController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'User\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'User\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'User\ProfileController@password']);
});

Route::get('/employee', function () {
    return view('hello');
});