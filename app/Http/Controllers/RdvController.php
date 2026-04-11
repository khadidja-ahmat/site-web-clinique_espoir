<?php

namespace App\Http\Controllers;
use App\Models\Rendezvous;
use App\Models\Patient;
use App\Models\Medecin;
use Illuminate\Support\Facades\DB;
use BD;
use Validator;

use Illuminate\Http\Request;

class RdvController extends Controller
{
    public function rendezvous(){
        $rdv = DB::table('rendezvous')
        ->join('patient','rendezvous.patient_id','=','patient.id')
        ->join('medecin','rendezvous.medecin_id','=','medecin.id')
        ->select('patient.*', 'medecin.*','rendezvous.*')
        // ->where(['voitures.id' => $id])
        ->get();
        return view('rdv', ['rdv' => $rdv]);
    }

    public function create(){
        $patients = Patient::get();
        $medecin = Medecin::get();
        return view('create_r', ['patients' => $patients, 'medecin' =>$medecin]);
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'dates' => 'required',  
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'type' => 'required',
            'statut' => 'required',
           
        ]);
        // dd($request->type);
        if($validator->passes()){
            $rdv = new Rendezvous();
            $rdv->dates = $request->dates;
            $rdv->patient_id = $request->patient_id ;
            $rdv->medecin_id  = $request->medecin_id ;
            $rdv->type = $request->type;
            $rdv->statut = $request->statut;
   
            $save = $rdv->save();
            // if($request->image){
            //     $ext = $request->image->getClientOriginalExtension();
            //     $newFileName = time().rand().'.'.$ext;
            //     $request->image->move(public_path().'/images/articles/', $newFileName);
            //     $article->image = $newFileName;
            //     $save = $article->save();
            // }
            if($save){
                $request->session()->flash('success', 'le rdv est enregistrer avec succes...!');
                return redirect()->route('list.rdv');
            }

        }else{
            return redirect()->route('list.rdv')->withErrors($validator);
        }
    }
        public function edit($id){
        $rdv = Rendezvous::findOrFail($id);
        $patients = Patient::get(); 
        $medecin = Medecin::get();
        return view('edit_r' , ['patients' => $patients, 'medecin' =>$medecin,'rdv' => $rdv]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'dates' => 'required',  
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'type' => 'required',
            'statut' => 'required',
        ]);

        if($validator->passes()){
            
            $rdv= Rendezvous::find($id);
            $rdv->dates = $request->dates;
            $rdv->patient_id = $request->patient_id ;
            $rdv->medecin_id  = $request->medecin_id ;
            $rdv->type = $request->type;
            $rdv->statut = $request->statut;
           
            // $article->image = $request->image;
            $save = $rdv->save();

            if($save){
                $request->session()->flash('success', 'Le rdv a été modifié avec succés...!');
                return redirect()->route('list.rdv');
            }

        }else{
            return redirect()->route('list.rdv')->withErrors($validator);
        }
    }

    public function destroy(Request $request, $id){
        $rdv = Rendezvous::findOrFail($id);
        $rdv->delete();

        $request->session()->flash('success', 'Le rdv a été supprimé avec succés...!');
        return redirect()->route('list.rdv');
    }



}
