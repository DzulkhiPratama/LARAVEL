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

// Route::get('/', function () {
//     return view('welcomesanber');
// });

// Route::get('/signup', function () {
//     return view('form');
// });

// Route::post('/well', function ($fname) {
//     return view('well');
// });

Route::get('/', 'PagesController@home');

Route::get('/signup', 'PagesController@signup');

Route::post('/registerpost', 'PagesController@registerpost');
