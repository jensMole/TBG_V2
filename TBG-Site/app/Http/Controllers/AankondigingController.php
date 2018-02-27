<?php

namespace App\Http\Controllers;

use App\Aankondiging;

use Illuminate\Http\Request;

class AankondigingController extends Controller
{
    // Toevoegen van een aankondiging.
    public function addAankon(Request $request)
    {
        // Nieuw aankondiging aanmaken.
        $aankond = new Aankondiging;
        // Toevoegen van een aankondiging.
        $aankond->aankondigingen = "<p>".request("aankondiging")."</p>";
        // Opslaan.
        $aankond->save();

        //terugsturen naar dashboard
        return redirect("/dashboard#aankondigingen");
    }

    // Verwijderen van een aankondiging
    public function destroyAankon($aankonId){
        // zoek de gegevens in de database.
        $aankond = Aankondiging::where('aankonId', $aankonId);
        // Verwijder het.
        $aankond->delete();
        // Terugsturen naar de pagina.
        return redirect("/dashboard#aankondigingen");
    }

    // Editeren van een aankondiging.
    public function editAankon($aankondigingId){
        // Zoek de aankondiging met behulp van het ID.
        $aankondiging = Aankondiging::find($aankondigingId);
        // Verkrijg de aankondiging.
        $aankondigingAfgehaald = $aankondiging["aankondigingen"];
        // Haal eerste p element weg.
        $aankondigingTransformStart = substr($aankondigingAfgehaald, 3); 
        // Haal achterste p element weg.
        $aankondigingTransform = rtrim($aankondigingTransformStart, "</p>");
        // ID verkrijgen van de gegevens.
        $ID = $aankondiging["aankonId"];
        // Opsturen van de gegevens naar de edit pagina.
        return view('panel.edit.editAankondiging', compact("aankondigingTransform", "ID"));
    }

    // Updaten van het aankondiging.
    public function updateAankon(Request $request, $id)
    {
        // ophalen van gegevens met het meegegeven ID.
        $Getaankondiging = Aankondiging::find($id);
        // gegevens die je hebt ingevoerd ophalen en de p elementen er terug aan vullen.
        $Getaankondiging->aankondigingen = "<p>".request("aankonding")."</p>";
        // Opslaan.
        $Getaankondiging->save();
        //terugsturen naar dashboard
        return redirect("/dashboard#aankondigingen");
    }
}
?>