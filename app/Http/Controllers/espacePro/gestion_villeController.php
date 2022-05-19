<?php

namespace App\Http\Controllers\espacePro;
use App\Models\Ville;
use App\Models\Departement;
use App\Models\User;
use App\Models\Ville_Dept_Art;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gestion_villeController extends Controller
{
    // public function index(){

    //     $details=Ville_Dept_Art::select('villes.nom_ville','departements.nom_departement','ville_dep_art.*')
    //     ->leftjoin('villes','villes.id','ville_dep_art.id_ville')
    //     ->leftjoin('departements','departements.id','ville_dep_art.id_departement')
    //     ->where('ville_dep_art.id_artisan', Auth::user()->id)
    //     ->get();
    //     $ville=Ville::get();
    //     $dept=Departement::get();
    //     return view('espace_pro.gestion_ville')->with('ville',$ville)->with('dept',$dept)->with('details',$details);
    // }


    public function afficher(){
        $result=Ville_Dept_Art::select('villes.nom_ville','departements.nom_departement','ville_dep_art.*')
        ->leftjoin('villes','villes.id','ville_dep_art.id_ville')
        ->leftjoin('departements','departements.id','ville_dep_art.id_departement')
        ->where('ville_dep_art.id_artisan', Auth::user()->id)
        ->get();
        $ville=Ville::get();
        $dept=Departement::get();
        $user=User::get();
        return view('espace_pro.gestion_ville')->with('ville',$ville)->with('dept',$dept)->with('user',$user)->with('result',$result);

    }


    public function delete_ville($id){
        Ville_Dept_Art::where('id',$id)
        ->delete();
        return back();
    }

}
