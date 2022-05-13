<?php

namespace App\Http\Controllers\espacePro;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class modification_profilController extends Controller
{
    public function index(){
        return view('espace_pro.modification_profil');
    }

    public function store(Request $request){

        // $user= new User;
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->prenom = $request->input('prenom');
        // $user->tel = $request->input('tel');
        // $user->nom_societe = $request->input('nom_societe');
        // $user->tel2 = $request->input('tel2');
        // $user->Fax = $request->input('Fax');
        // $user->seret = $request->input('seret');
        // $user->code_naf = $request->input('code_naf');
        // $user->description= $request->input('description');
        // $user->libelle=$request->input('libelle');
        // $user->adress = $request->input('adress');
        // $user->facebook = $request->input('facebook');
        // $user->linkdin = $request->input('linkdin');

    //     $student->name = $request->input('name');


     }


    public function update(Request $request,$id){

        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'prenom' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:255'],
            'nom_societe' => ['required', 'string', 'max:255'],
            'tel2' => ['required', 'string', 'max:13','min:10'],
            'Fax' => ['required', 'string', 'max:13','min:10'],
            'seret' => ['required', 'string', 'max:255'],
            'code_naf' => ['required', 'string', 'max:255'],
            // 'description'=>['required', 'string', 'max:255'],
            'libelle' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'facebook' => ['required', 'string', 'max:255'],
            'linkdin' => ['required', 'string', 'max:255'],
            'instagram' => ['required', 'string', 'max:255'],
            'siteweb' => ['required', 'string', 'max:255'],
            'google' => ['required', 'string', 'max:255'],
            'heure_debut' => ['required', 'string', 'max:255'],
            'heure_fin' => ['required', 'string', 'max:255'],
            'code_postal' => ['required', 'string', 'max:255'],

        ]);

        $user = User::select('users.*')
        ->where('users.id',Auth::user()->id)->first()
        ->update($validateData);
        return back();

       



    }

}
