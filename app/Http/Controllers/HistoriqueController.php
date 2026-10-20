<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Historique;
use Illuminate\Support\Facades\DB;
use BD;
use Validator;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function historique(){
        $historiques = DB::table('historique')
        ->join('patient','historique.patient_id','=','patient.id')
        ->select('patient.*', 'historique.*')
        ->get();
        return view('historique', ['historique' => $historiques]);
    }

    public function create(){
        $patients = Patient::get();
        return view('create_h', ['patients' => $patients]);
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|exists:patient,id',
            'resultat' => 'required|string',
            'prescription' => 'required|string',
            'antecedant' => 'required|string',
            'resultat_test' => 'required|string',
        ]);

        if($validator->passes()){
            $historique = new historique();
            $historique->patient_id = $request->patient_id ;
            $historique->resultat = $request->resultat;
            $historique->prescription = $request->prescription;
            $historique->antecedant = $request->antecedant;
            $historique->resultat_test = $request->resultat_test;
            
   
            $save = $historique->save();
            if($save){
                $request->session()->flash('success', 'la historique est enregistrer avec succes...!');
                return redirect()->route('list.historique');
            }

        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
        public function edit($id){
        $historiques = Historique::findOrFail($id);
        $patients = Patient::get(); 
        return view('edit_h' , ['patients' => $patients, 'historique' => $historiques]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|exists:patient,id',
            'resultat' => 'required|string',
            'prescription' => 'required|string',
            'antecedant' => 'required|string',
            'resultat_test' => 'required|string',
        ]);

        if($validator->passes()){
            
            $historique= Historique::find($id);
            $historique->patient_id = $request->patient_id ;
            $historique->resultat = $request->resultat;
            $historique->prescription = $request->prescription;
            $historique->antecedant = $request->antecedant;
            $historique->resultat_test = $request->resultat_test;
           
            // $article->image = $request->image;
            $save = $historique->save();
            if($save){
                $request->session()->flash('success');
                return redirect()->route('list.historique');
            }

        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function destroy(Request $request, $id){
        $historique = Historique::findOrFail($id);
        $historique->delete();

        $request->session()->flash('success', 'La historique a été supprimé avec succés...!');
        return redirect()->route('list.historique');
    }



}
