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
 
        return view('panel.index', compact('vidLink'));
    }

    public function updateLinkVoorPag(Request $request)
    {
        //link ophalen uit database
        $vidLinkGet = HoofdPag::find(1);
        //link ophalen wat je hebt ingevuld
        $vidLinkGet->vidLink = request("vidLink");
        $vidLinkGet->save();

        return redirect("/dashboard");

    }

}

?>