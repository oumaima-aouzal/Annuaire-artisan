<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'email',
        'details_commentaire',
        'note',
        'img1',
        'img2',
        'img3',
    ];
}
