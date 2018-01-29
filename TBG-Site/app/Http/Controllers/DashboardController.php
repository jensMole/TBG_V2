<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //ophalen van de url van de video uit database.
        $vidLink = HoofdPag::pluck("vidLink");
        $tekstFront = HoofdPag::pluck("tekstFrontPage");
        $vids = Video::pluck('VideoLink');

        // https://www.youtube.com/watch?v=p44TszdiiA4
        //url omvormen naar vb. p44TszdiiA4.
        $newVidLink = substr($vidLink, 37, 11);
 
        return view('panel.index', compact('vidLink','newVidLink','tekstFront','vids'));
    }

    /**
     * Updaten van de link voor de frontVideo.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateLinkVoorPag(Request $request)
    {
        //link ophalen uit database
        $vidLinkGet = HoofdPag::find(1);
        //link ophalen wat je hebt ingevuld.
        $vidLinkGet->vidLink = request("vidLink");
        //opslaan.
        $vidLinkGet->save();
        //terugsturen naar dashboard
        return redirect("/dashboard");
    }

    /**
     * Updaten tekst voor frontpag.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateTekstVoorPag(Request $request)
    {
        // ophalen van gegevens.
        $GetTekst = HoofdPag::find(1);
        // Ophalen gegevens die je hebt ingevuld.
        $GetTekst->tekstFrontPage = request("tekstFronpage");
        // Opslaan.
        $GetTekst->save();
        //terugsturen naar dashboard
        return redirect("/dashboard");
    }

    /**
     * Updaten van de linken van de video's
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  id $id ophalen van het id dat wordt meegegeven.
     * @return \Illuminate\Http\Response
     */
    public function vidUpdate(Request $request, $id)
    {
        // ophalen van gegevens.
        $GetVideo = Video::find($id+1);

        $sRequest = "vid".$id;

        $GetVideo->VideoLink = request($sRequest);

        $GetVideo->save();

        return redirect("/dashboard");
    }
}

?>