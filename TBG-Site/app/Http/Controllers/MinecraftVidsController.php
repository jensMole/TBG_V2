<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use Illuminate\Http\Request;

class MinecraftVidsController extends Controller
{

    public function plugins()
    {
        //terug geven van de view
        return view('video/Minecraft.plugins');
    }

    public function mods()
    {
        //terug geven van de view
        return view('video/Minecraft.mods');
    }

    public function maps()
    {
        //terug geven van de view
        return view('video/Minecraft.maps');
    }

    public function minigames()
    {
        //terug geven van de view
        return view('video/Minecraft.minigames');
    }

    public function tutorials()
    {
        //terug geven van de view
        return view('video/Minecraft.tutorials');
    }

    public function snapshots()
    {
        //terug geven van de view
        return view('video/Minecraft.snapshots');
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