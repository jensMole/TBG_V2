<?php

namespace App\Http\Controllers;

use App\Aanvragen;
use App\TypesAanvragen;
use Illuminate\Http\Request;

class AanvragenController extends Controller
{

    public function index()
    {
        // Ophalen van data.
        $Types = Aanvragen::pluck('Type');
        $NaamType = TypesAanvragen::get();

        if (count($Types) === 0) {
            $Types = false;
        }

        $Info = Aanvragen::pluck('Info');

        //terug geven van de view met de data.
        return view('Aanvragen/aanvragen', compact('Types','Info','NaamType'));
    }

    // Toevoegen van een aanvraag.
    public function addAanvraag(Request $request)
    {
        // Nieuwe aanvraag aanmaken.
        $aanvraag = new Aanvragen;
        
        // Toevoegen van de aanvraag.
        $aanvraag->Type = request("typeSelect");
        $aanvraag->Info = request("infoAanvraag");
        $aanvraag->Link = request("linkAanvraag");
        // Opslaan.
        $aanvraag->save();

        //terugsturen naar dashboard
        return redirect("/aanvragen");
    }
}

?>