<?php

namespace App\Http\Controllers;

use App\Plugin;

use Illuminate\Http\Request;

class PluginsController extends Controller
{

 // Toevoegen van een plugin.
 public function addPlugin(Request $request)
 {

    // We gaan eerst de oudste weghalen (Dus eerste ID).
    $oudsteId = Plugin::pluck('pluginsId')->first();

    // zoek de gegevens in de database.
    $pluginDelete = Plugin::where('pluginsId', $oudsteId);
    // Verwijder het.
    $pluginDelete->delete();

    // Nieuwe muziek aanmaken.
    $plugin = new Plugin;
    // Toevoegen van een Link van de plugin.
    $plugin->link = request("pluginsLink");
    // Toevoegen van de tekst van de plugin die getoond wordt.
    $plugin->tekst = request("pluginsTekst");
    // Toevoegen van de tekst van de plugin die getoond wordt.
    $plugin->onlinePluginTekst = "<a href='".request("pluginsLink")."' target='_blank'>".request("pluginsTekst")."</a>";

    // Opslaan.
    $plugin->save();

    //terugsturen naar dashboard
    return redirect("/dashboard#plugins");
 }






 // Verwijderen van muziek
 public function destroyMuziek($muziekId){
     // zoek de gegevens in de database.
     $muziek = Muziek::where('muziekId', $muziekId);
     // Verwijder het.
     $muziek->delete();
     // Terugsturen naar de pagina.
     return redirect("/dashboard#muziek");
 }

 // Editeren van Muziek.
 public function editMuziek($muziekId){
     // Zoek de online video met behulp van het ID.
     $muziek = Muziek::find($muziekId);
     // Verkrijg de online video link.
     $muziekLink = $muziek["link"];
     // Verkrijg de online video tekst.
     $muziektekst = $muziek["tekst"];
     // ID verkrijgen van de gegevens.
     $ID = $muziek["muziekId"];
     // Opsturen van de gegevens naar de edit pagina.
     return view('panel.edit.editMuziek', compact("muziekLink", "muziektekst", "ID"));
 }

 // Updaten van muziek.
 public function updateMuziek(Request $request, $id)
 {
     // ophalen van gegevens met het meegegeven ID.
     $GetMuziek = Muziek::find($id);
     // Toevoegen van een Link van de video.
     $GetMuziek->link = request("MuziekLinkEdit");
     // Toevoegen van de tekst van de video die getoond wordt.
     $GetMuziek->tekst = request("MuziekTekstEdit");
     // Toevoegen van de tekst van de video die getoond wordt.
     $GetMuziek->onlineLinkTekst = "<a href='".request("MuziekLinkEdit")."' target='_blank'>".request("MuziekTekstEdit")."</a>"; 
     // Opslaan.
     $GetMuziek->save();
     //terugsturen naar dashboard
     return redirect("/dashboard#muziek");
 }
}
?>