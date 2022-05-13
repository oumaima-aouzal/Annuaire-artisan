<?php

namespace App\Http\Controllers\espacePro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function show(){
        return view('espace_pro.index');
    }
}
