<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('video.videoHome');
    }
}
?>