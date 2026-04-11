<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use DB;
use Validator;

class ConsultationApiController extends Controller
{
  public function consultation(){
    $consultations = DB::table('consultation')
    ->join('patient','consultation.patient_id','=','patient.id')
    ->join('medecin','consultation.medecin_id','=','medecin.id')
    ->select('patient.*', 'medecin.*','consultation.*')
    ->get();
    return response()->json($consultations);  
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
                return response()->json([
                  'consultation' => $consultation,
                  'status' => 202,
                  'message' => "le consultation a été enregistré avec succés",
                ]);
            }
    
        }else{
          return response()->json([
            'status' => 500,
            'message' => " le consultation n'a été enregistré avec succés",
          ]);
        }
}
public function update(Request $request, $id){
    $validator = Validator::make($request->all(), [
        'date' => 'required',  
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
            return response()->json([
              'consultation' => $consultation,
              'status' => 202,
              'message' => "le consultation a été modifié avec succès",
            ]);
        }
  
    }else{
      return response()->json([
        'status' => 500,
        'message' => "Le consultation n'a pas été modifié avec succès",
      ]);
    }
  }
  
  public function destroy(Request $request, $id){
    $consultation = Consultation::findOrFail($id);
      if($consultation){
        $consultation->delete();     
        return response()->json([
            'status' => 202,
            'message' => "le consultation a été supprimé avec succès",
          ]);
    }
      else{
    return response()->json([
        'status' => 404,
        'message' => "le consultation ne peut pas etre supprimé",
      ]);
    }
}
}