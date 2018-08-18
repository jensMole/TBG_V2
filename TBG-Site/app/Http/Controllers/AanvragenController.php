<?php

namespace App\Http\Controllers;

use App\Aanvragen;
use App\TypesAanvragen;
use Illuminate\Http\Request;

class AanvragenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'addAanvraag']);
    }

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

    // Verwijderen van een aanvraag
    public function destroyAanvraag($aanvraagId){
        // zoek de gegevens in de database.
        $aanvraag = Aanvragen::where('Id', $aanvraagId);
        // Verwijder het.
        $aanvraag->delete();
        // Terugsturen naar de pagina.
        return redirect("/dashboard/aanvragen");
    }

    // Pas prefix en suffix aan als de aanvraag accept is.
    public function acceptAanvraag($aanvraagId){

        // zoek de gegevens in de database.
        $aanvraag = Aanvragen::find($aanvraagId);

        $aanvraag->Prefix = "<b>";

        $aanvraag->Suffix = "</b>";

        $aanvraag->Foto = 1;

        // Opslaan.
        $aanvraag->save();

        // Terugsturen naar de pagina.
        return redirect("/dashboard/aanvragen");

    }

    // Pas prefix en suffix aan als de aanvraag denied is.
    public function deniedAanvraag($aanvraagId){

        // zoek de gegevens in de database.
        $aanvraag = Aanvragen::find($aanvraagId);

        $aanvraag->Prefix = "<strike>";

        $aanvraag->Suffix = "</strike>";

        $aanvraag->Foto = 0;

        // Opslaan.
        $aanvraag->save();

        // Terugsturen naar de pagina.
        return redirect("/dashboard/aanvragen");

    }

    // Pas prefix en suffix aan als de aanvraag denied is.
    public function resetAanvraag($aanvraagId){

        // zoek de gegevens in de database.
        $aanvraag = Aanvragen::find($aanvraagId);

        $aanvraag->Prefix = null;

        $aanvraag->Suffix = null;

        $aanvraag->Foto = 2;

        // Opslaan.
        $aanvraag->save();

        // Terugsturen naar de pagina.
        return redirect("/dashboard/aanvragen");

    }
}

?>