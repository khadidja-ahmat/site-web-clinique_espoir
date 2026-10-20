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
            'patient_id' => 'required|exists:patient,id',
            'nom_medicament' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
            'frequence_utilisation' => 'required|string|max:255',
            'date_prescription' => 'required|date',
            'duree_prescription' => 'required|date|after_or_equal:date_prescription',
            'date_expiration' => 'required|date|after_or_equal:date_prescription',
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
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
        public function edit($id){
        $ordonnance = Ordonnance::findOrFail($id);
        $patients = Patient::get(); 
        return view('edit_o' , ['patients' => $patients, 'ordonnance' => $ordonnance]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|exists:patient,id',
            'nom_medicament' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
            'frequence_utilisation' => 'required|string|max:255',
            'date_prescription' => 'required|date',
            'duree_prescription' => 'required|date|after_or_equal:date_prescription',
            'date_expiration' => 'required|date|after_or_equal:date_prescription',
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
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function destroy(Request $request, $id){
        $ordonnance = Ordonnance::findOrFail($id);
        $ordonnance->delete();

        $request->session()->flash('success', 'La ordonnance a été supprimé avec succés...!');
        return redirect()->route('list.ordonnance');
    }



}
