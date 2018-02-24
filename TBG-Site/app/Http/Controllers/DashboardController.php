<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use App\Bericht;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //ophalen van de url van de video uit database.
        $vidLink = HoofdPag::pluck("vidLink");
        $tekstFront = HoofdPag::pluck("tekstFrontPage");
        $vids = Video::pluck('VideoLink');
        $berichten = Bericht::all();

        // https://www.youtube.com/watch?v=p44TszdiiA4
        //url omvormen naar vb. p44TszdiiA4.
        $newVidLink = substr($vidLink, 37, 11);
 
        return view('panel.index', compact('vidLink','newVidLink','tekstFront','vids','berichten'));
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
        // Nakijken waar je zit met het updaten van de video's.
        switch($id){

            case 1:
                $icounter = 7;
                break;

            case 2:
                $icounter = 11;
                break;
            
            case 3:
                $icounter = 15;
                break;
                
            case 4:
                $icounter = 18;
                break;
            
            case 5:
                $icounter = 21;
                break;

            case 6:
                $icounter = 25;
                break;

        }

        // Voor de delen met enkel 3 video's.
        if($icounter == 15 || $icounter == 18){
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
        }else{
            for( $i = 0; $i < 4; $i++){
                // ophalen van gegevens.
                $GetVideo = Video::find($icounter);
                // gegevens die je hebt ingevoerd ophalen.
                $GetVideo->VideoLink = request("vid".$icounter);
                // Opslaan.
                $GetVideo->save();
                // Optellen van de counter voor de volgende video.
                $icounter++;
            }    
        }

        // Terugsturen naar de pagina in het video segment.
        return redirect("/dashboard/minecraft/#$id");
    }


    /**
     * Updaten van de linken van de video's
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  id $id ophalen van het id dat wordt meegegeven.
     * @return \Illuminate\Http\Response
     */

    //  TODO segment aanmaken en meegeven.
    public function vidUpdateAndere(Request $request, $id)
    {
        // Nakijken waar je zit met het updaten van de video's.
        switch($id){

            case 1:
                $icounter = 29;
                break;

            case 2:
                $icounter = 33;
                break;
            
            case 3:
                $icounter = 37;
                break;
                
            case 4:
                $icounter = 41;
                break;

        }

        for( $i = 0; $i < 4; $i++){
            // ophalen van gegevens.
            $GetVideo = Video::find($icounter);
            // gegevens die je hebt ingevoerd ophalen.
            $GetVideo->VideoLink = request("vid".$icounter);
            // Opslaan.
            $GetVideo->save();
            // Optellen van de counter voor de volgende video.
            $icounter++;
        }    

        // Terugsturen naar de pagina in het video segment.
        return redirect("/dashboard/andere/#$id");
    }


    public function addBericht(Request $request)
    {

        // dd( Input::all() );

        // Nieuw bericht aanmaken.
        $bericht = new Bericht;
        // Toevoegen van het bericht.
        $bericht->berichten = "<p>".request("bericht")."</p>";
        // Opslaan.
		$bericht->save();

        //terugsturen naar dashboard
        return redirect("/dashboard#berichten");
    }

    
    public function destroyBericht($berichtId){
        // zoek de gegevens in de database.
        $bericht = Bericht::where('gegevensId', $berichtId);
        // Verwijder het.
        $bericht->delete();
        // Terugsturen naar de pagina.
        return redirect("/dashboard#berichten");
    }



    public function edit($berichtId){

        $bericht = Bericht::find($berichtId);

        $berichtTransform = $bericht["berichten"];
        

        return view('panel.edit', compact("berichtTransform"));

    }

}

?>