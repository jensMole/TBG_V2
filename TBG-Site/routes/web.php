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

// Tonen van de index (voorpagina).
Route::get('/', 'HomeController@index');

// Tonen van het dashboard.
Route::get('/dashboard', 'DashBoardController@index');