<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultatController extends Controller
{
    public function show(){
        return view('resultat_mapgrid');
    }

    public function showlist(){
        return view('resultat_liste');
    }
}
