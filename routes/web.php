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

Route::get('', 'IndexController')->name('home');

Route::view('login', 'login')->name('login');

Route::view('register', 'register')->name('register');

Route::view('write', 'write')->name('write')->middleware('auth');

Route::get('{post}', 'PostController')->name('post');

Route::get('{post}/list', 'PostListController')->name('post.list');

Route::get('user/login', 'Auth\LoginController@showLoginForm')->name('user.login');

Route::post('user/login', 'Auth\LoginController@login');

Route::post('user/logout', 'Auth\LoginController@logout')->name('user.logout');

Route::get('user/register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
Route::post('user/register', 'Auth\RegisterController@register');
