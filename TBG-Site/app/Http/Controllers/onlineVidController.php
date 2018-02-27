<?php

namespace App\Http\Controllers;

use App\OnlineVid;

use Illuminate\Http\Request;

class OnlineVidController extends Controller
{
    // Toevoegen van een online video.
    public function addVid(Request $request)
    {
        // Nieuw online video aanmaken.
        $video = new OnlineVid;
        // Toevoegen van een Link van de video.
        $video->Link = request("onlineVidLink");
        // Toevoegen van de tekst van de video die getoond wordt.
        $video->Tekst = request("onlineVidTekst");
        // Toevoegen van de tekst van de video die getoond wordt.
        $video->onlineVidTekst = "<p><a href='".request("onlineVidLink")."' target='_blank'>".request("onlineVidTekst")."</a></p>";

        // Opslaan.
        $video->save();

        //terugsturen naar dashboard
        return redirect("/dashboard#online");
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
        // Verkrijg de online video.
        $onlineVidAfgehaald = $onlineVid["onlineVidTekst"];
        // Haal eerste p element weg.
        $onlineVidTransformStart = substr($onlineVidAfgehaald, 3); 
        // Haal achterste p element weg.
        $onlineVidTransform = rtrim($onlineVidTransformStart, "</p>");
        // ID verkrijgen van de gegevens.
        $ID = $onlineVid["gegevensId"];
        // Opsturen van de gegevens naar de edit pagina.
        return view('panel.edit.editOnlineVid', compact("onlineVidTransform", "ID"));
    }







    // Updaten van het aankondiging.
    public function updateAankon(Request $request, $id)
    {
        // ophalen van gegevens met het meegegeven ID.
        $Getaankondiging = Aankondiging::find($id);
        // gegevens die je hebt ingevoerd ophalen en de p elementen er terug aan vullen.
        $Getaankondiging->aankondigingen = "<p>".request("aankonding")."</p>";
        // Opslaan.
        $Getaankondiging->save();
        //terugsturen naar dashboard
        return redirect("/dashboard#aankondigingen");
    }
}
?>