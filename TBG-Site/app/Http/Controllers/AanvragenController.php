<?php

namespace App\Http\Controllers;

// use App\HoofdPag;
use Illuminate\Http\Request;

class AanvragenController extends Controller
{

    public function index()
    {
        //terug geven van de view.
        return view('Aanvragen/aanvragen');
    }
}

?>