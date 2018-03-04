<?php

namespace App\Http\Controllers;

use App\OnlineVid;

use Illuminate\Http\Request;

class OnlineVidController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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