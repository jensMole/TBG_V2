<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use App\Video;
use Illuminate\Http\Request;

class MinecraftVidsController extends Controller
{

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
}