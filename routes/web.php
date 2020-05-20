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

Route::get('/', 'HomeController@index')->name('home');

Route::view('/login', 'login')->name('login');

Route::view('/signup', 'signup')->name('signup');

Route::get('/{post}', 'HomeController@post')->name('post');

Route::group(['middleware' => ['web']], function () {
    Route::post('/api/signup', 'Auth\RegisterController@register');
    Route::get('/api/signup', 'Auth\RegisterController@showRegistrationForm')->name('api.signup');
    Route::post('/api/login', 'Auth\LoginController@login')->name('api.login');
    Route::get('/api/logout', 'Auth\LoginController@logout')->name('api.logout');
});