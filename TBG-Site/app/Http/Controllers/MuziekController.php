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
     $muziek->Link = request("onlineMuziekLink");
     // Toevoegen van de tekst van de muziek die getoond wordt.
     $muziek->Tekst = request("onlineMuziekTekst");
     // Toevoegen van de tekst van de muziek die getoond wordt.
     $muziek->onlineLinkTekst = "<a href='".request("onlineMuziekLink")."' target='_blank'>".request("onlineMuziekTekst")."</a>";

     // Opslaan.
     $muziek->save();

     //terugsturen naar dashboard
     return redirect("/dashboard#muziek");
 }





 // Verwijderen van een onlineVid
 public function destroyOnlineVid($onlineVidId){
     // zoek de gegevens in de database.
     $aankond = OnlineVid::where('gegevensId', $onlineVidId);
     // Verwijder het.
     $aankond->delete();
     // Terugsturen naar de pagina.
     return redirect("/dashboard#online");
 }

 // Editeren van een online video.
 public function editOnlineVid($onlineVidID){
     // Zoek de online video met behulp van het ID.
     $onlineVid = OnlineVid::find($onlineVidID);
     // Verkrijg de online video link.
     $onlineVidLink = $onlineVid["Link"];
     // Verkrijg de online video tekst.
     $onlineVidtekst = $onlineVid["Tekst"];
     // ID verkrijgen van de gegevens.
     $ID = $onlineVid["gegevensId"];
     // Opsturen van de gegevens naar de edit pagina.
     return view('panel.edit.editOnlineVid', compact("onlineVidLink", "onlineVidtekst", "ID"));
 }

 // Updaten van de online video.
 public function updateOnlineVideo(Request $request, $id)
 {
     // ophalen van gegevens met het meegegeven ID.
     $GetOnlineVid = OnlineVid::find($id);
     // Toevoegen van een Link van de video.
     $GetOnlineVid->Link = request("onlineVidLinkEdit");
     // Toevoegen van de tekst van de video die getoond wordt.
     $GetOnlineVid->Tekst = request("onlineVidTekstEdit");
     // Toevoegen van de tekst van de video die getoond wordt.
     $GetOnlineVid->onlineVidTekst = "<p><a href='".request("onlineVidLinkEdit")."' target='_blank'>".request("onlineVidTekstEdit")."</a></p>"; 
     // Opslaan.
     $GetOnlineVid->save();
     //terugsturen naar dashboard
     return redirect("/dashboard#online");
 }
}
?>