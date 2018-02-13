<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{

    public function aankon()
    {    
        //terug geven van de view
        return view('extra/aankondigingen');
    }

    public function downloads()
    {
        //terug geven van de view
        return view('extra/downloads');
    }

}