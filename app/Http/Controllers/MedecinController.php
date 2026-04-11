<?php

namespace App\Http\Controllers;
use App\Models\Medecin;
use Validator;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function medecin(){
        $medecin = Medecin::get();
        return view('medecin', ['medecin' => $medecin]);
    }

    public function create(){
       
        return view('create_m');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'noms' => 'required',
            'genre' => 'required',  
            'specialité' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'email' => 'required',
        ]);
        // dd($request->type);
        if($validator->passes()){
            $medecin = new medecin();
            $medecin->noms = $request->noms;
            $medecin->genre = $request->genre;
            $medecin->specialité = $request->specialité;
            $medecin->adresse = $request->adresse;
            $medecin->tel = $request->tel;
            $medecin->email = $request->email;
   
            $save = $medecin->save();
            if($request->image){
                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().rand().'.'.$ext;
                $request->image->move(public_path().'/images/articles/', $newFileName);
                $medecin->image = $newFileName;
                $save = $medecin->save();
            }
            if($save){
                $request->session()->flash('success', 'le medecin est enregistrer avec succes...!');
                return redirect()->route('list.medecin');
            }

        }else{
            return redirect()->route('list.medecin')->withErrors($validator);
        }
    }
        public function edit($id){
        $medecin = Medecin::findOrFail($id);
        return view('edit_m' , ['medecin' => $medecin]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'noms' => 'required',
            'genre' => 'required',  
            'specialité' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'email' => 'required',
        ]);

        if($validator->passes()){
            
            $medecin= Medecin::find($id);
            $medecin->noms = $request->noms;
            $medecin->genre = $request->genre;
            $medecin->specialité = $request->specialité;
            $medecin->adresse = $request->adresse;
            $medecin->tel = $request->tel;
            $medecin->email = $request->email;
           
            // $article->image = $request->image;
            $save = $medecin->save();

            if($save){
                $request->session()->flash('success', 'Le medecin a été modifié avec succés...!');
                return redirect()->route('list.medecin');
            }

        }else{
            return redirect()->route('list.medecin')->withErrors($validator);
        }
    }

    public function destroy(Request $request, $id){
        $medecin = Medecin::findOrFail($id);
        $medecin->delete();

        $request->session()->flash('success', 'Le medecin a été supprimé avec succés...!');
        return redirect()->route('list.medecin');
    }

}
