<?php

namespace App\Http\Controllers\espacePro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialite;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Cat_Spec_Art;
use Auth;


class gestion_catController extends Controller
{
    public function index(){
        
        $details=Cat_Spec_Art::select('specialites.nom_specialite','categories.nom_categorie','cat_spec_art.*')
        ->leftjoin('specialites','specialites.id','cat_spec_art.id_specialite')
        ->leftjoin('categories','categories.id','cat_spec_art.id_categorie')
        ->where('cat_spec_art.id-artisan', Auth::user()->id)
        ->get();
        $cat=Categorie::get();
        $spec=Specialite::get();
        $user=User::get();
        return view('espace_pro.gestion_cat')->with('spec',$spec)->with('cat',$cat)->with('user',$user)->with('details',$details);
    }
}
