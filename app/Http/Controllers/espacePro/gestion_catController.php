<?php

namespace App\Http\Controllers\espacePro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gestion_catController extends Controller
{
    public function index(){
        return view('espace_pro.gestion_cat');
    }
}
