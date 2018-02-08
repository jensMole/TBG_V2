<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverController extends Controller
{
    public function over()
    {
        return view('Over.over');
    }

    public function contact()
    {
        return view('Over.contact');
    }
}
