<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use Validator;

class EmployeController extends Controller
{    
    public function employe(){
        $employe = Employe::get();
        return view('employe', ['employe' => $employe]);
    }

    public function create(){
       
        return view('create_e');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'noms' => 'required|string|max:255',
            'genre' => 'required|in:homme,femme',
            'poste' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:30|regex:/^[0-9+\s().-]{6,30}$/',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        if($validator->passes()){
            $employe = new employe();
            $employe->noms = $request->noms;
            $employe->genre = $request->genre;
            $employe->poste = $request->poste;
            $employe->adresse = $request->adresse;
            $employe->tel = $request->tel;
            $employe->email = $request->email;

            $save = $employe->save();
            if($request->image){
                $ext = $request->image->extension();
                $newFileName = time().rand().'.'.$ext;
                $request->image->move(public_path().'/images/articles/', $newFileName);
                $employe->image = $newFileName;
                $save = $employe->save();
            }
            if($save){
                $request->session()->flash('success', 'employe  est enregistrer avec succes...!');
                return redirect()->route('list.employe');
            }

        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
        public function edit($id){
        $employes = Employe::findOrFail($id);
        return view('edit_e' , ['employe' => $employes]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'noms' => 'required|string|max:255',
            'genre' => 'required|in:homme,femme',
            'poste' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:30|regex:/^[0-9+\s().-]{6,30}$/',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if($validator->passes()){

            
            $employe= Employe::find($id);
            $employe->noms = $request->noms;
            $employe->genre = $request->genre;
            $employe->poste = $request->poste;
            $employe->adresse = $request->adresse;
            $employe->tel = $request->tel;
            $employe->email = $request->email;
            
            $save = $employe->save();

            if($save){
                $request->session()->flash('success', 'employe a été modifié avec succés...!');
                return redirect()->route('list.employe');
            }

        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function destroy(Request $request, $id){
        $employes = Employe::findOrFail($id);
        $employes->delete();

        $request->session()->flash('success', 'employe a été supprimé avec succés...!');
        return redirect()->route('list.employe');
    }


}
