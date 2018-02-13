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
// Video's hoofd pagina.
Route::get('/video','VideoController@index');

// Minecraft video indeling.
Route::get('/plugins','MinecraftVidsController@plugins');
Route::get('/mods','MinecraftVidsController@mods');
Route::get('/maps','MinecraftVidsController@maps');
Route::get('/minigames','MinecraftVidsController@minigames');
Route::get('/tutorials','MinecraftVidsController@tutorials');
Route::get('/snapshots','MinecraftVidsController@snapshots');

// Andere video indeling
Route::get('/planetcoaster','AndereVidsController@planetcoaster');
Route::get('/howtoplugins','AndereVidsController@howToPlugins');
Route::get('/howtowebsites','AndereVidsController@howTowebsites');
Route::get('/reacties','AndereVidsController@reacties');

// Over 
Route::get('/over','OverController@over');
Route::get('/contact','OverController@contact');

// Extra
Route::get('/aankondigingen','ExtraController@aankon');
Route::get('/downloads','ExtraController@downloads');



// Dashboard
// Tonen van het dashboard.
Route::get('/dashboard/minecraft','DashBoardController@minecraft');
Route::get('/dashboard/andere','DashBoardController@andere');
Route::resource('/dashboard','DashBoardController');

// updaten van de video link van voorpagina.
Route::post("updateLinkVidVoorPagina", "DashboardController@updateLinkVoorPag");
// Updaten tekst frontpage.
Route::post("updateTekstVoorPagina","DashboardController@updateTekstVoorPag");
// Video's die geupdate moeten worden.
Route::post("vidUpdate/{id}","DashboardController@vidUpdate");
// Video's die geupdate moeten worden.
Route::post("vidUpdateMinecraft/{id}","DashboardController@vidUpdateMinecraft");
// Video's die geupdate moeten worden.
Route::post("vidUpdateAndere/{id}","DashboardController@vidUpdateAndere");