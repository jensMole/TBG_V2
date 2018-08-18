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
        $NaamType = TypesAanvragen::get();
        $Types = Aanvragen::orderby("Type","asc")->get();

        if (count($Types) === 0) {
            $Types = false;
        }

        //terug geven van de view met de data.
        return view('Aanvragen/aanvragen', compact('Types','NaamType'));
    }

    // Toevoegen van een aanvraag.
    public function addAanvraag(Request $request)
    {
        // Nieuwe aanvraag aanmaken.
        $aanvraag = new Aanvragen;
        
        // Nakijken als al de data wordt meegegeven.
        if(request("typeSelect")) {
            $aanvraag->Type = request("typeSelect");
        } else{
            return redirect("/aanvragen");
        }

        if(request("infoAanvraag")) {
            $aanvraag->Info = request("infoAanvraag");
        } else{
            return redirect("/aanvragen");
        }
       
        $aanvraag->Link = request("linkAanvraag");

        // Opslaan.
        $aanvraag->save();

        //terugsturen naar dashboard
        return redirect("/aanvragen");
    }
}

?>