<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Medecin;
use App\Models\Consultation;
use DB;
use Validator;

class ConsultationController extends Controller
{
    
    public function consultation(){
        $consultations = DB::table('consultation')
        ->join('patient','consultation.patient_id','=','patient.id')
        ->join('medecin','consultation.medecin_id','=','medecin.id')
        ->select('patient.*', 'medecin.*','consultation.*')
        ->get();
        return view('consultation', ['consultation' => $consultations]);
    }

    public function create(){
        $patients = Patient::get();
        $medecin = Medecin::get();
        return view('create_c', ['patients' => $patients, 'medecin' =>$medecin]);
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'date' => 'required',  
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'type' => 'required',
            'resultat' => 'required',
           
        ]);
        if($validator->passes()){
            $consultation = new Consultation();
            $consultation->date = $request->date;
            $consultation->patient_id = $request->patient_id ;
            $consultation->medecin_id  = $request->medecin_id ;
            $consultation->type = $request->type;
            $consultation->resultat = $request->resultat;
   
            $save = $consultation->save();
            
            if($save){
                $request->session()->flash('success', 'le consultation est enregistrer avec succes...!');
                return redirect()->route('list.consultation');
            }

        }else{
            return redirect()->route('create_c')->withErrors($validator);
        }
    }
        public function edit($id){
        $consultations = Consultation::findOrFail($id);
        $patients = Patient::get(); 
        $medecin = Medecin::get();
        return view('edit_c' , ['patients' => $patients, 'medecin' =>$medecin,'consultation' => $consultations]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'dates' => 'required',  
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'type' => 'required',
            'resultat' => 'required',
        ]);

        if($validator->passes()){
            
            $consultation= Consultation::find($id);
            $consultation->date = $request->date;
            $consultation->patient_id = $request->patient_id ;
            $consultation->medecin_id  = $request->medecin_id ;
            $consultation->type = $request->type;
            $consultation->resultat = $request->resultat;
           
            // $article->image = $request->image;
            $save = $consultation->save();

            if($save){
                $request->session()->flash('success', 'Le consultation a été modifié avec succés...!');
                return redirect()->route('list.consultation');
            }

        }else{
            return redirect()->route('create_c')->withErrors($validator);
        }
    }

    public function destroy(Request $request, $id){
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();

        $request->session()->flash('success', 'Le consultation a été supprimé avec succés...!');
        return redirect()->route('list.consultation');
    }




}
