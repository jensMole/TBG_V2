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

}