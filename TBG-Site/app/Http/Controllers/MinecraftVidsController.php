<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use Illuminate\Http\Request;

class MinecraftVidsController extends Controller
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

    public function plugins()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Minecraft.plugins', compact('vids'));
    }

    public function mods()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Minecraft.mods', compact('vids'));
    }

    public function maps()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Minecraft.maps', compact('vids'));
    }

    public function minigames()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Minecraft.minigames', compact('vids'));
    }

    public function tutorials()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Minecraft.tutorials', compact('vids'));
    }

    public function snapshots()
    {
        // ophalen van de url van de video uit database.
        $vids = Video::pluck('VideoLink');

        //terug geven van de view
        return view('video/Minecraft.snapshots', compact('vids'));
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
}