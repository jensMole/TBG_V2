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



//Dashboard
// Tonen van het dashboard.
Route::resource('/dashboard','DashBoardController');
//updaten van de video link van voorpagina.
Route::post("updateLinkVidVoorPagina", "DashboardController@updateLinkVoorPag");
