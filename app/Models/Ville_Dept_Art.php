<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville_Dept_Art extends Model
{
    use HasFactory;
    protected $table="ville_dep_art";

    protected $fillable=[
        'id_departement',
        'id_ville',
        'id_artisan',
    ];
}
