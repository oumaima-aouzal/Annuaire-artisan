<?php

namespace App\Http\Controllers\details_resultat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profilController extends Controller
{
    public function show(){
        return view('details_resultat.profil');
    }
}
