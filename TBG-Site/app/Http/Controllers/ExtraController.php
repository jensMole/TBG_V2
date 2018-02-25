<?php

namespace App\Http\Controllers;

use App\Bericht;
use App\Aankondiging;
use App\onlineVid;

use Illuminate\Http\Request;

class ExtraController extends Controller
{

    public function aankon()
    {    
        // Verkrijgen van de berichten.
        $berichten = Bericht::orderBy("gegevensId", "desc")->get();

        if (count($berichten) === 0) {
            $berichten = false;
        }

        // Verkrijgen van de aankondigingen.
        $aankondigingen = Aankondiging::pluck("aankondigingen");

        $onlineVid = onlineVid::pluck("onlineVidTekst");

        //terug geven van de view
        return view('extra/aankondigingen', compact("berichten", "aankondigingen", "onlineVid"));
    }

    public function downloads()
    {
        //terug geven van de view
        return view('extra/downloads');
    }

}