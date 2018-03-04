<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use Illuminate\Http\Request;

class AndereVidsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['planetcoaster', 'howToPlugins', 'howTowebsites', 'reacties']);
    }

    public function planetcoaster()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Andere.planetcoaster', compact('vids'));
    }

    public function howToPlugins()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Andere.howPlugins', compact('vids'));
    }

    public function howTowebsites()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Andere.howWebsites', compact('vids'));
    }

    public function reacties()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Andere.LezenReactiesAndere', compact('vids'));
    }

     /**
     * Updaten van de linken van de video's
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  id $id ophalen van het id dat wordt meegegeven.
     * @return \Illuminate\Http\Response
     */
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
}