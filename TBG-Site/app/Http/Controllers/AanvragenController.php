<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

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

        // Zijn er aanvragen?
        if (count($Types) === 0) {
            $Types = false;
        }
        else {

            $pluginType = null;
            $modType = null;
            $programType = null;
            $anderType = null;

            // Kijken welke aanvragen er zijn en ze in groepen delen.
            for($i = 0; $i < count($Types); $i++){
            
                if($Types[$i]["Type"] == 1){

                    $pluginType[$i] = $Types[$i];

                }
                elseif($Types[$i]["Type"] == 2){

                    $modType[$i] = $Types[$i];

                }
                elseif($Types[$i]["Type"] == 3){

                    $programType[$i] = $Types[$i];

                }
                elseif($Types[$i]["Type"] == 4){

                    $anderType[$i] = $Types[$i];

                }
            
            }

            // Nakijken als er in een groep wel aanvragen zijn.
            if (!$pluginType){
                $pluginType = false; 
            }
            
            if (!$modType){
                $modType = false;
            }
            
            if (!$programType){
                $programType = false;
            }
            
            if (!$anderType){
                $anderType = false;
            }
        }
 
         // Zenden naar de pagina met de data.
         return view('Aanvragen/aanvragen', compact('Types','NaamType','pluginType','modType','programType','anderType'));
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