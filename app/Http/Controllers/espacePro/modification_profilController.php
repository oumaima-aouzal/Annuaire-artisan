<?php

namespace App\Http\Controllers\espacePro;
use App\Models\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class modification_profilController extends Controller
{
    public function index(){
        return view('espace_pro.modification_profil');
    }

//    public $validateData = array();
//      public function validate(){
//         $validateData = $request->validate([
//             'name' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'prenom' => ['required', 'string', 'max:255'],
//             'tel' => ['required', 'string', 'max:255'],
//             'nom_societe' => ['required', 'string', 'max:255'],
//             'tel2' => ['required', 'string', 'max:13','min:10'],
//             'Fix' => ['required', 'string', 'max:13','min:10'],
//             'seret' => ['required', 'string', 'max:255'],
//             'code_naf' => ['required', 'string', 'max:255'],
//             'libelle' => ['required', 'string', 'max:255'],
//             'adress' => ['required', 'string', 'max:255'],
//             'facebook' => ['required', 'string', 'max:255'],
//             'linkdin' => ['required', 'string', 'max:255'],
//             'instagram' => ['required', 'string', 'max:255'],
//             'siteweb' => ['required', 'string', 'max:255'],
//             'description'=>['required', 'string', 'max:255'],
//             'google' => ['required', 'string', 'max:255'],
//             'heure_debut' => ['required', 'string', 'max:255'],
//             'heure_fin' => ['required', 'string', 'max:255'],
//             'ville' => ['required', 'string', 'max:255'],
//             'code_postal' => ['required', 'string', 'max:255'],
//         ]);
//      }

    public function update_prof(Request $request){
       
            $user = User::select('users.*')
            ->where('users.id',Auth::user()->id)
            ->update(['name'=>$request->name,
            'email'=>$request->email,
            'prenom'=>$request->prenom,'tel'=>$request->tel,'nom_societe'=>$request->nom_societe,
            'tel2'=>$request->tel2,'Fix'=>$request->Fix,'seret'=>$request->seret,'code_naf'=>$request->code_naf,
            'libelle'=>$request->libelle,'adress'=>$request->adress,'facebook'=>$request->facebook,'linkdin'=>$request->linkdin,'instagram'=>$request->instagram,
            'siteweb'=>$request->siteweb,'description'=>$request->description,'google'=>$request->google,'heure_debut'=>$request->heure_debut,
            'ville'=>$request->ville,'code_postal'=>$request->code_postal]);
            return back();
        
        
       

    }


}
