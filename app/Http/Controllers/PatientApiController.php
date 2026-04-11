<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Validator;

class PatientApiController extends Controller
{
    public function patient(){
        $patients = Patient::get();
        return response()->json($patients);
         
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'noms' => 'required',  
            'date_naissance' => 'required',
            'genre' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'ACO' => 'required',
            'AFTO' => 'required',
        ]); 
        if($validator->passes()){
            $patient = new patient();
            $patient->noms = $request->noms;
            $patient->date_naissance = $request->date_naissance;
            $patient->genre = $request->genre;
            $patient->adresse = $request->adresse;
            $patient->tel = $request->tel;
            $patient->ACO = $request->ACO;
            $patient->AFTO = $request->AFTO;
   
            $save = $patient->save();
            
    
            if($save){
                return response()->json([
                  'patient' => $patient,
                  'status' => 202,
                  'message' => "le patient a été enregistré avec succés",
                ]);
            }
    
        }else{
          return response()->json([
            'status' => 500,
            'message' => " le patient n'a été enregistré avec succés",
          ]);
        }
    }

    
  public function update(Request $request, $id){

    $validator = Validator::make($request->all(), [
        'noms' => 'required',  
        'date_naissance' => 'required',
        'genre' => 'required',
        'adresse' => 'required',
        'tel' => 'required',
        'ACO' => 'required',
        'AFTO' => 'required',
    ]);        
     if($validator->passes()){
        $patient = Patient::find($id);
        $patient->noms = $request->noms;
        $patient->date_naissance = $request->date_naissance;
        $patient->genre = $request->genre;
        $patient->adresse = $request->adresse;
        $patient->tel = $request->tel;
        $patient->ACO = $request->ACO;
        $patient->AFTO = $request->AFTO;
        
        $save = $patient->save();
        
  if($save){
          return response()->json([
            'patient' => $patient,
            'status' => 202,
            'message' => "le patient a été modifié avec succès",
          ]);
      }

  }else{
    return response()->json([
      'status' => 500,
      'message' => "Le patient n'a pas été modifié avec succès",
    ]);
  }
}
    public function destroy(Request $request, $id){
        $patient = Patient::findOrFail($id);
        if($patient){
            $patient->delete();
            return response()->json([
                'status' => 202,
                'message' => "le patient a été supprimé avec succès",
              ]);
        }
        else{
        return response()->json([
            'status' => 404,
            'message' => "le patient ne peut pas etre supprimé",
          ]);
        }
        
        }
    
}
