<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sousCat extends Controller
{
    public function sous_cat(){
        return view('categories.sous_categorie');
    }
}
