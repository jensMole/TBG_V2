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

    public function minecraft()
    {
        //afhalen van gegevens (video linken).
        $vids = Video::pluck('VideoLink');

        return view('panel.minecraftVids', compact('vids'));
    }


    public function andere()
    {
        return view('panel.andereVids');
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
        $GetVideo = Video::find($id);
        // gegevens die je hebt ingevoerd ophalen.
        $GetVideo->VideoLink = request("vid".$id);
        // Opslaan.
        $GetVideo->save();
        // Terugsturen naar de pagina in het video segment.
        return redirect("/dashboard#videoLink");
    }


    /**
     * Updaten van de linken van de video's
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  id $id ophalen van het id dat wordt meegegeven.
     * @return \Illuminate\Http\Response
     */

    //  TODO segment aanmaken en meegeven.
    public function vidUpdateMinecraft(Request $request, $id)
    {
        // ophalen van gegevens.
        $GetVideo = Video::find($id);
        // gegevens die je hebt ingevoerd ophalen.
        $GetVideo->VideoLink = request("vid".$id);
        // Opslaan.
        $GetVideo->save();
        // Terugsturen naar de pagina in het video segment.
        return redirect("/dashboard/minecraft");
    }
}

?>