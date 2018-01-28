<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $vidLink = HoofdPag::pluck("vidLink");

        // https://www.youtube.com/watch?v=p44TszdiiA4
        $newVidLink = substr($vidLink, 37, 11);

        return view('welcome', compact('newVidLink'));
    }

}

?>