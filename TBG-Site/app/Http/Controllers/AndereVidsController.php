<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use Illuminate\Http\Request;

class AndereVidsController extends Controller
{

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

}