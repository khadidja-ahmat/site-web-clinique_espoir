<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Ordonnance;
use DB;
use Validator;

class OrdonnanceApiController extends Controller
{
    public function ordonnances(){
        $ordonnances = DB::table('ordonnance')
        ->join('patient','ordonnance.patient_id','=','patient.id')
        ->select('patient.*', 'ordonnance.*')
        ->get();
        return response()->json($ordonnances);  
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
        if($validator->passes()){
            $ordonnance = new Ordonnance();
            $ordonnance->patient_id = $request->patient_id ;
            $ordonnance->nom_medicament = $request->nom_medicament;
            $ordonnance->dosage = $request->dosage;
            $ordonnance->frequence_utilisation = $request->frequence_utilisation;
            $ordonnance->date_prescription = $request->date_prescription;
            $ordonnance->duree_prescription = $request->duree_prescription;
            $ordonnance->date_expiration = $request->date_expiration;
            $save = $ordonnance->save();
            if($save){
                return response()->json([
                  'ordonnance' => $ordonnance,
                  'status' => 202,
                  'message' => "l'ordonnance a été enregistré avec succés",
                ]);
            }
        }else{
            return response()->json([
              'status' => 500,
              'message' => " l' ordonnance n'a été enregistré avec succés",
            ]);
          }
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
        $save = $ordonnance->save();
        $save = $ordonnance->save();
        if($save){
            return response()->json([
              'ordonnance' => $ordonnance,
              'status' => 202,
              'message' => "l'ordonnance a été modifié avec succès",
            ]);
        }
  
    }else{
      return response()->json([
        'status' => 500,
        'message' => "L'ordonnance n'a pas été modifié avec succès",
      ]);
    }
  }
  public function destroy(Request $request, $id){
    $ordonnance = Ordonnance::findOrFail($id);
    $ordonnance->delete();

  if($ordonnance){ 
    $ordonnance->delete();     
    return response()->json([
        'status' => 202,
        'message' => "l'ordonnance a été supprimé avec succès",
      ]);
}
  else{
return response()->json([
    'status' => 404,
    'message' => "l'ordonnance ne peut pas etre supprimé",
  ]);
}
}
            

}
