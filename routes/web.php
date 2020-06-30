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

use Illuminate\Support\Facades\Route;

//akan mengatur kontrol pembukaan home
Route::get('/', 'PagesController@home');

//akan mengatur kontrol pembukaan form sign up
Route::get('/signup', 'PagesController@signup');

//akan mengatur kontrol pembukaan page welcome, menampilkan nama
Route::post('/registerpost', 'PagesController@registerpost');
