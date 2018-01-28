<?php

namespace App\Http\Controllers;

use App\HoofdPag;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //ophalen van de url van de video uit database.
        $vidLink = HoofdPag::pluck("vidLink");

        // https://www.youtube.com/watch?v=p44TszdiiA4
        //url omvormen naar vb. p44TszdiiA4.
        $newVidLink = substr($vidLink, 37, 11);
 
        return view('panel.index', compact('vidLink','newVidLink'));
    }

    public function updateLinkVoorPag(Request $request)
    {
        //link ophalen uit database
        $vidLinkGet = HoofdPag::find(1);
        //link ophalen wat je hebt ingevuld.
        $vidLinkGet->vidLink = request("vidLink");
        //opslaan.
        $vidLinkGet->save();
        //terugsturen naar dashboard
        return redirect("/dashboard");
    }
}

?>