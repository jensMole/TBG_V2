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










    // Verwijderen van een aankondiging
    public function destroyAankon($aankonId){
        // zoek de gegevens in de database.
        $aankond = Aankondiging::where('aankonId', $aankonId);
        // Verwijder het.
        $aankond->delete();
        // Terugsturen naar de pagina.
        return redirect("/dashboard#aankondigingen");
    }

    // Editeren van een aankondiging.
    public function editAankon($aankondigingId){
        // Zoek het aankondiging met behulp van het ID.
        $aankondiging = Aankondiging::find($aankondigingId);
        // Verkrijg het aankondiging.
        $aankondigingAfgehaald = $aankondiging["aankondigingen"];
        // Haal eerste p element weg.
        $aankondigingTransformStart = substr($aankondigingAfgehaald, 3); 
        // Haal achterste p element weg.
        $aankondigingTransform = rtrim($aankondigingTransformStart, "</p>");
        // ID verkrijgen van de gegevens.
        $ID = $aankondiging["aankonId"];
        // Opsturen van de gegevens naar de edit pagina.
        return view('panel.edit.editAankondiging', compact("aankondigingTransform", "ID"));
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