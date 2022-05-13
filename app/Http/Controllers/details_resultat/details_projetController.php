<?php

namespace App\Http\Controllers\details_resultat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class details_projetController extends Controller
{
    public function showdetailsprojet(){
        return view('details_resultat.details_projet');
    }
}
