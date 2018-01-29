<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //ophalen van de url van de video uit database.
        $vidLink = HoofdPag::pluck("vidLink");
        // Verkrijgen van de tekst.
        $tekst = HoofdPag::pluck("tekstFrontPage");

        // https://www.youtube.com/watch?v=p44TszdiiA4
        //url omvormen naar vb. p44TszdiiA4.
        $newVidLink = substr($vidLink, 37, 11);

        //terug geven van de view en meegeven van de link.
        return view('welcome', compact('newVidLink','tekst'));
    }
}

?>