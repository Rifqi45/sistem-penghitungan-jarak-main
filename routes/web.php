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

Route::get('/', 'UserController@home')->name('home');

Route::middleware('guest')->get('/login', 'UserController@login')->name('login');
Route::middleware('guest')->post('/login', 'UserController@postLogin')->name('postLogin');
Route::middleware('auth')->get('/logout', 'UserController@logout')->name('logout');
Route::middleware('auth')->resource('sekolah', 'SekolahController');