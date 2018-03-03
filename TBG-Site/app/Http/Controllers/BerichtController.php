<?php

namespace App\Http\Controllers;

use App\Bericht;

use Illuminate\Http\Request;

class BerichtController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Toevoegen van een bericht.
    public function addBericht(Request $request)
    {
        // Nieuw bericht aanmaken.
        $bericht = new Bericht;
        // Toevoegen van het bericht.
        $bericht->berichten = "<p>".request("bericht")."</p>";
        // Opslaan.
        $bericht->save();

        //terugsturen naar dashboard
        return redirect("/dashboard#berichten");
    }

    // Verwijderen van een bericht
    public function destroyBericht($berichtId){
        // zoek de gegevens in de database.
        $bericht = Bericht::where('gegevensId', $berichtId);
        // Verwijder het.
        $bericht->delete();
        // Terugsturen naar de pagina.
        return redirect("/dashboard#berichten");
    }

    // Editeren van een bericht.
    public function edit($berichtId){
        // Zoek het bericht met behulp van het ID.
        $bericht = Bericht::find($berichtId);
        // Verkrijg het bericht.
        $berichtAfgehaald = $bericht["berichten"];
        // Haal eerste p element weg.
        $berichtTransformStart = substr($berichtAfgehaald, 3); 
        // Haal achterste p element weg.
        $berichtTransform = rtrim($berichtTransformStart, "</p>");
        // ID verkrijgen van de gegevens.
        $ID = $bericht["gegevensId"];
        // Opsturen van de gegevens naar de edit pagina.
        return view('panel.edit.editBericht', compact("berichtTransform", "ID"));
    }

    // Updaten van het bericht.
    public function updateBericht(Request $request, $id)
    {
        // ophalen van gegevens met het meegegeven ID.
        $GetBericht = Bericht::find($id);
        // gegevens die je hebt ingevoerd ophalen en de p elementen er terug aan vullen.
        $GetBericht->berichten = "<p>".request("bericht")."</p>";
        // Opslaan.
        $GetBericht->save();
        //terugsturen naar dashboard
        return redirect("/dashboard#berichten");
    }
}
?>