<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville_Dept_Art extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_departement',
        'id_ville',
        'id_artisan',
    ];
}
