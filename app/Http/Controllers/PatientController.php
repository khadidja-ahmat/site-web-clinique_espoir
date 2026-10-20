<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Validator;

class PatientController extends Controller
{
    public function patient(){
        $patients = Patient::get();
        return view('patient', ['patients' => $patients]);
    }

    public function create(){
       
        return view('create_p');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'date_naissance' => 'required|date|before_or_equal:today',
            'genre' => 'required|in:homme,femme',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:30|regex:/^[0-9+\s().-]{6,30}$/',
            'ACO' => 'required|string|max:100',
            'AFTO' => 'required|string|max:100',
        ]);
        // dd($request->type);
        if($validator->passes()){
            $patient = new patient();
            $patient->nom = $request->nom;
            $patient->date_naissance = $request->date_naissance;
            $patient->genre = $request->genre;
            $patient->adresse = $request->adresse;
            $patient->tel = $request->tel;
            $patient->ACO = $request->ACO;
            $patient->AFTO = $request->AFTO;
   
            $save = $patient->save();
            // if($request->image){
            //     $ext = $request->image->extension();
            //     $newFileName = time().rand().'.'.$ext;
            //     $request->image->move(public_path().'/images/articles/', $newFileName);
            //     $article->image = $newFileName;
            //     $save = $article->save();
            // }
            if($save){
                $request->session()->flash('success', 'le patient est enregistrer avec succes...!');
                return redirect()->route('list.patient');
            }

        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
        public function edit($id){
        $patient = Patient::findOrFail($id);
        return view('edit_p' , ['patient' => $patient]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'date_naissance' => 'required|date|before_or_equal:today',
            'genre' => 'required|in:homme,femme',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:30|regex:/^[0-9+\s().-]{6,30}$/',
            'ACO' => 'required|string|max:100',
            'AFTO' => 'required|string|max:100',
        ]);

        if($validator->passes()){
            
            $patient= Patient::find($id);
            $patient->nom = $request->nom;
            $patient->date_naissance = $request->date_naissance;
            $patient->genre = $request->genre;
            $patient->adresse = $request->adresse;
            $patient->tel = $request->tel;
            $patient->ACO = $request->ACO;
            $patient->AFTO = $request->AFTO;
           
            // $article->image = $request->image;
            $save = $patient->save();

            if($save){
                return redirect()->route('list.patient');
            }

        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function destroy(Request $request, $id){
        $patient = Patient::findOrFail($id);
        $patient->delete();

        $request->session()->flash('success', 'Le patient a été supprimé avec succés...!');
        return redirect()->route('list.patient');
    }



}
