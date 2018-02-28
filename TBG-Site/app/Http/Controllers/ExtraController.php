<?php

namespace App\Http\Controllers;

use App\Bericht;
use App\Aankondiging;
use App\OnlineVid;

use Illuminate\Http\Request;

class ExtraController extends Controller
{

    public function aankon()
    {    
        // Verkrijgen van de berichten.
        $berichten = Bericht::orderBy("gegevensId", "desc")->get();
        // Verkrijgen van de aankondigingen.
        $aankondigingen = Aankondiging::get();
        // Verkrijgen van de online Video's.
        $onlineVid = OnlineVid::orderBy("gegevensId", "desc")->get();

        // Als er geen berichten zijn dan sturen we false
        if (count($berichten) === 0) {
            $berichten = false;
        }

        // Als er geen aankondigingen zijn dan sturen we false
        if (count($aankondigingen) === 0) {
            $aankondigingen = false;
        }

        // Als er geen online Video's zijn dan sturen we false
        if (count($onlineVid) === 0) {
            $onlineVid = false;
        } 

        //terug geven van de view
        return view('extra/aankondigingen', compact("berichten", "aankondigingen", "onlineVid"));
    }

    public function downloads()
    {
        //terug geven van de view
        return view('extra/downloads');
    }

}