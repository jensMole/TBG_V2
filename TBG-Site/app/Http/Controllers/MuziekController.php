<?php

namespace App\Http\Controllers;

use App\Muziek;

use Illuminate\Http\Request;

class MuziekController extends Controller
{

 // Toevoegen van een muziek.
 public function addMuziek(Request $request)
 {
     // Nieuwe muziek aanmaken.
     $muziek = new Muziek;
     // Toevoegen van een Link van de muziek.
     $muziek->link = request("onlineMuziekLink");
     // Toevoegen van de tekst van de muziek die getoond wordt.
     $muziek->tekst = request("onlineMuziekTekst");
     // Toevoegen van de tekst van de muziek die getoond wordt.
     $muziek->onlineLinkTekst = "<a href='".request("onlineMuziekLink")."' target='_blank'>".request("onlineMuziekTekst")."</a>";

     // Opslaan.
     $muziek->save();

     //terugsturen naar dashboard
     return redirect("/dashboard#muziek");
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