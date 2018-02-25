<?php

namespace App\Http\Controllers;

use App\Bericht;

use Illuminate\Http\Request;

class BerichtController extends Controller
{
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
        $berichtTransform = $bericht["berichten"];
        // ID verkrijgen van de gegevens.
        $gegevensId = $bericht["gegevensId"];
        // Opsturen van de gegevens naar de edit pagina.
        return view('panel.edit', compact("berichtTransform", "gegevensId"));
    }
}
?>