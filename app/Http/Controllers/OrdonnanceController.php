<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Ordonnance;
use Validator;
use DB;

class OrdonnanceController extends Controller
{
   public function ordonnance(){
        $ordonnance = DB::table('ordonnance')
        ->join('patient','ordonnance.patient_id','=','patient.id')
        ->select('patient.*', 'ordonnance.*')
        ->get();
        return view('ordonnance', ['ordonnance' => $ordonnance]);
    }

    public function create(){
        $patients = Patient::get();
        return view('create_o', ['patients' => $patients]);
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'patient_id' => 'required',
            'nom_medicament' => 'required',  
            'dosage' => 'required',
            'frequence_utilisation' => 'required',
            'date_prescription' => 'required',
            'duree_prescription' => 'required',
            'date_expiration' => 'required',
           
        ]);
        // dd($request->type);
        if($validator->passes()){
            $ordonnance = new ordonnance();
            $ordonnance->patient_id = $request->patient_id ;
            $ordonnance->nom_medicament = $request->nom_medicament;
            $ordonnance->dosage = $request->dosage;
            $ordonnance->frequence_utilisation = $request->frequence_utilisation;
            $ordonnance->date_prescription = $request->date_prescription;
            $ordonnance->duree_prescription = $request->duree_prescription;
            $ordonnance->date_expiration = $request->date_expiration;
            
   
            $save = $ordonnance->save();
            if($save){
                $request->session()->flash('success', 'la prescription est enregistrer avec succes...!');
                return redirect()->route('list.ordonnance');
            }

        }else{
            return redirect()->route('list.ordonnance')->withErrors($validator);
        }
    }
        public function edit($id){
        $ordonnance = Ordonnance::findOrFail($id);
        $patients = Patient::get(); 
        return view('edit_o' , ['patients' => $patients, 'ordonnance' => $ordonnance]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required',
            'nom_medicament' => 'required',  
            'dosage' => 'required',
            'frequence_utilisation' => 'required',
            'date_prescription' => 'required',
            'duree_prescription' => 'required',
            'date_expiration' => 'required',
        ]);

        if($validator->passes()){
            
            $ordonnance= Ordonnance::find($id);
            $ordonnance->patient_id = $request->patient_id ;
            $ordonnance->nom_medicament = $request->nom_medicament;
            $ordonnance->dosage = $request->dosage;
            $ordonnance->frequence_utilisation = $request->frequence_utilisation;
            $ordonnance->date_prescription = $request->date_prescription;
            $ordonnance->duree_prescription = $request->duree_prescription;
            $ordonnance->date_expiration = $request->date_expiration;
           
            // $article->image = $request->image;
            $save = $ordonnance->save();
            if($save){
                $request->session()->flash('success', 'La ordonnance a été modifié avec succés...!');
                return redirect()->route('list.ordonnance');
            }

        }else{
            return redirect()->route('list.ordonnance')->withErrors($validator);
        }
    }

    public function destroy(Request $request, $id){
        $ordonnance = Ordonnance::findOrFail($id);
        $ordonnance->delete();

        $request->session()->flash('success', 'La ordonnance a été supprimé avec succés...!');
        return redirect()->route('list.ordonnance');
    }



}
