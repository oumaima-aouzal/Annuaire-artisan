<?php

namespace App\Http\Controllers\Artisan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index(){
        return view('Artisan.profil');
    }
}
