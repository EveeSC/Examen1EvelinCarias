<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\tipoAsiento;
// use App\Models\vuelo;
// use App\Models\vueloAsiento;

class AerolineaController extends Controller
{
    public function inicio(){
        return view('inicio');
    }    

}
