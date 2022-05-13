<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    public function index(){
        return view('categories.categorie');
    }
}
