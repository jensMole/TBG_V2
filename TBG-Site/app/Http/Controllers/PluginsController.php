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

 // Editeren van Plugin.
 public function editPlugin($pluginId){
     // Zoek de online video met behulp van het ID.
     $plugin = Plugin::find($pluginId);
     // Verkrijg de online video link.
     $pluginLink = $plugin["link"];
     // Verkrijg de online video tekst.
     $pluginTekst = $plugin["tekst"];
     // ID verkrijgen van de gegevens.
     $ID = $plugin["pluginsId"];
     // Opsturen van de gegevens naar de edit pagina.
     return view('panel.edit.editPlugin', compact("pluginLink", "pluginTekst", "ID"));
 }

 // Updaten van plugin.
 public function updatePlugin(Request $request, $id)
 {
     // ophalen van gegevens met het meegegeven ID.
     $Getplugin = Plugin::find($id);
     // Toevoegen van een Link van de video.
     $Getplugin->link = request("pluginLinkEdit");
     // Toevoegen van de tekst van de video die getoond wordt.
     $Getplugin->tekst = request("pluginTekstEdit");
     // Toevoegen van de tekst van de video die getoond wordt.
     $Getplugin->onlinePluginTekst = "<a href='".request("pluginLinkEdit")."' target='_blank'>".request("pluginTekstEdit")."</a>"; 
     // Opslaan.
     $Getplugin->save();
     //terugsturen naar dashboard
     return redirect("/dashboard#plugins");
 }
}
?>