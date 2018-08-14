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
        // $NaamType = TypesAanvragen::get();

        if (count($Types) === 0) {
            $Types = false;
        }

        $Info = Aanvragen::pluck('Info');
        $Link = Aanvragen::pluck('Link');

        //terug geven van de view met de data.
        return view('Aanvragen/aanvragen', compact('Types','Info','Link','NaamType'));
    }
}

?>