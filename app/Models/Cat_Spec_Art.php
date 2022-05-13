<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat_Spec_Art extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'id_categorie',
        'id_artisan',
        'id_specialite',
    ];
}
