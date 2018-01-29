<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $vids = Video::pluck('VideoLink');

        return view('video.videoHome', compact('vids'));
    }
}
?>