<?php

namespace App\Http\Controllers;
use App\Models\Medecin;

use Illuminate\Http\Request;

class MedecinApiController extends Controller
{
    public function medecin(){
        $medecins = Medecin::get();
        return response()->json($medecins);
         
    }
}
