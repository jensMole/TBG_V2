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

Auth::routes();
// Sturen naar home page.
Route::get('/', 'HomeController@index');

// Voor als je bent aangemeld naar het dashboard.
Route::get('/home', 'DashBoardController@index');

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
Route::post("vidUpdateMinecraft/{id}","MinecraftVidsController@vidUpdateMinecraft");
// Video's die geupdate moeten worden.
Route::post("vidUpdateAndere/{id}","AndereVidsController@vidUpdateAndere");

// Berichten
// toevoegen van een nieuw item bij de berichten.
Route::post("addBerichten", "BerichtController@addBericht");
// Berichten verwijderen.
Route::post('bericht/{id}','BerichtController@destroyBericht');
// Berichten editeren.
Route::post('bericht/edit/{id}','BerichtController@edit');
// Berichten updaten.
Route::post('bericht/edit/updateBericht/{id}','BerichtController@updateBericht');

// Aankondigingen
// toevoegen van een nieuw item bij de aankondingen.
Route::post("addAankond", "AankondigingController@addAankon");
// Aankondiging verwijderen.
Route::post('aankondiging/{id}','AankondigingController@destroyAankon');
// Aankondiging editeren.
Route::post('aankondiging/edit/{id}','AankondigingController@editAankon');
// Aankondigingen updaten.
Route::post('aankondiging/edit/updateAankondiging/{id}','AankondigingController@updateAankon');


// Online video's
// toevoegen van een nieuw item bij de online video's.
Route::post("addvid", "onlineVidController@addVid");
// Online video's verwijderen.
Route::post('onlinevideo/{id}','onlineVidController@destroyOnlineVid');
// Online video's editeren.
Route::post('onlinevid/edit/{id}','onlineVidController@editOnlineVid');
// Online video updaten.
Route::post('onlinevid/edit/updateOnlineVideo/{id}','onlineVidController@updateOnlineVideo');


// Muziek
// toevoegen van een nieuw item bij de muziek.
Route::post("addMuziek", "MuziekController@addMuziek");
// Muziek verwijderen.
Route::post('muziek/{id}','MuziekController@destroyMuziek');
// Muziek editeren.
Route::post('muziek/edit/{id}','MuziekController@editMuziek');
// muziek updaten.
Route::post('muziek/edit/updateMuziek/{id}','MuziekController@updateMuziek');


// Plugins
// toevoegen van een nieuw item bij de plugins.
Route::post("addPlugins", "PluginsController@addPlugin");
// Plugin editeren.
Route::post('plugin/edit/{id}','PluginsController@editPlugin');
// Plugin updaten.
Route::post('plugin/edit/updatePlugin/{id}','PluginsController@updatePlugin');