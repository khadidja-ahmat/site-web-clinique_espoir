<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    // Page publique : seuls le nom et la spécialité sont affichés (pas de téléphone ni d'e-mail).
    public function equipe(){
        $medecins = Medecin::orderBy('noms')->get(['noms', 'specialité']);
        return view('equipe', ['medecins' => $medecins]);
    }
    public function contact(){
        return view('contact');
    }
   
}
