<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function vuelos(){
        return view('vuelos');
    }
}
