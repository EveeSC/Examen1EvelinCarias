<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\tipoAsiento;
// use App\Models\vuelo;
// use App\Models\vueloAsiento;

class TipoAsientoController extends Controller
{
 
    
    public function tiposAsiento(){
        return view('tiposAsientos');
    }

}
