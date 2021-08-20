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

// Route::get('/', function () {
//     return view('welcome');
// });

// templates
Route::view('404', '404');
Route::view('blank', 'blank');
Route::view('buttons', 'buttons');
Route::view('cards', 'cards');
Route::view('charts', 'charts');
Route::view('/', 'index');

// use different layout
Route::view('forgot-password', 'forgot-password');
Route::view('login', 'login');
Route::view('register', 'register');

Route::view('tables', 'tables');
Route::view('utilities-animation', 'utilities-animation');
Route::view('utilities-border', 'utilities-border');
Route::view('utilities-color', 'utilities-color');
Route::view('utilities-other', 'utilities-other');