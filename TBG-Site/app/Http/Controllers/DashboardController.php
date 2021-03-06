<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use App\Bericht;
use App\Aankondiging;
use App\OnlineVid;
use App\Muziek;
use App\Plugin;
use App\Aanvragen;
use App\TypesAanvragen;


use Illuminate\Http\Request;

class DashboardController extends Controller
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

    public function index()
    {
        //ophalen van de url van de video uit database.
        $vidLink = HoofdPag::pluck("vidLink");
        $tekstFront = HoofdPag::pluck("tekstFrontPage");
        $vids = Video::pluck('VideoLink');
        $berichten = Bericht::orderBy("gegevensId", "desc")->get();
        $aankondigingen = Aankondiging::get();
        $OnlineVideos = OnlineVid::orderBy("gegevensId", "desc")->get();
        $muziek = Muziek::orderBy("muziekId", "desc")->get();
        $plugin = Plugin::orderBy("pluginsId", "desc")->get();

        $GenoegVideos = true;
        $genoegMuziek = true;

        // Nakijken als er berichten zijn anders sturen we false.
        if (count($berichten) === 0) {
            $berichten = false;
        }

        // Nakijken als er aankondigingen zijn anders sturen we false.
        if (count($aankondigingen) === 0) {
            $aankondigingen = false;
        }

        // Nakijken als er online video's zijn anders sturen we false.
        if (count($OnlineVideos) === 0) {
            $OnlineVideos = false;
        }
        // Nakijken als er 6 of meer online video's er al zijn en dan zetten we de knop uit.
        else if (count($OnlineVideos) >= 6){
            $GenoegVideos = false;
        }

        // Nakijken als er muziek linken zijn anders sturen we false.
        if (count($muziek) === 0) {
            $muziek = false;
        }
        // Nakijken als er 8 of meer muziek items er al zijn en dan zetten we de knop uit.
        else if (count($muziek) >= 8){
            $genoegMuziek = false;
        }

        

        

        // https://www.youtube.com/watch?v=p44TszdiiA4
        //url omvormen naar vb. p44TszdiiA4.
        $newVidLink = substr($vidLink, 37, 11);
 
        return view('panel.index', compact('vidLink','newVidLink','tekstFront','vids','berichten', 'aankondigingen', 'OnlineVideos', 'GenoegVideos', 'muziek', 'genoegMuziek', 'plugin'));
    }

    public function minecraft()
    {
        //afhalen van gegevens (video linken).
        $vids = Video::pluck('VideoLink');

        return view('panel.minecraftVids', compact('vids'));
    }


    public function andere()
    {
        //afhalen van gegevens (video linken).
        $vids = Video::pluck('VideoLink');

        return view('panel.andereVids', compact('vids'));
    }

    public function aanvragen()
    {

        // Ophalen van data.
        $NaamType = TypesAanvragen::get();
        $Types = Aanvragen::orderby("Type","asc")->get();

        // Zijn er aanvragen?
        if (count($Types) === 0) {
            $Types = false;
        }
        else {

            $pluginType = null;
            $modType = null;
            $programType = null;
            $anderType = null;

            // Kijken welke aanvragen er zijn en ze in groepen delen.
            for($i = 0; $i < count($Types); $i++){
            
                if($Types[$i]["Type"] == 1){

                    $pluginType[$i] = $Types[$i];

                }
                elseif($Types[$i]["Type"] == 2){

                    $modType[$i] = $Types[$i];

                }
                elseif($Types[$i]["Type"] == 3){

                    $programType[$i] = $Types[$i];

                }
                elseif($Types[$i]["Type"] == 4){

                    $anderType[$i] = $Types[$i];

                }
            
            }

            // Nakijken als er in een groep wel aanvragen zijn.
            if (!$pluginType){
                $pluginType = false; 
            }
            
            if (!$modType){
                $modType = false;
            }
            
            if (!$programType){
                $programType = false;
            }
            
            if (!$anderType){
                $anderType = false;
            }

        }

        // Zenden naar de pagina met de data.
        return view('panel.aanvragenPanel', compact('Types','NaamType','pluginType','modType','programType','anderType'));
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
        // Nakijken waar je zit met het updaten van de video's.
        switch($id){

            case 1:
                $icounter = 1;
                break;

            case 2:
                $icounter = 4;
                break;

        }

        for( $i = 0; $i < 3; $i++){
            // ophalen van gegevens.
            $GetVideo = Video::find($icounter);
            // gegevens die je hebt ingevoerd ophalen.
            $GetVideo->VideoLink = request("vid".$icounter);
            // Opslaan.
            $GetVideo->save();
            // Optellen van de counter voor de volgende video.
            $icounter++;
        }    

        return redirect("/dashboard#videoLink");
    }
}
?>