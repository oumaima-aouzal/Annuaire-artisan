<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class devisController extends Controller
{
    public function show(){
        return view('devis');
    }

    public function signaler(){
        return view('signaler');
    }
}
