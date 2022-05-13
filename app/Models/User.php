<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name',
    //     'prenom',
    //     'nom_societe',
    //     'tel1',
    //     'tel2',
    //     'fix',
    //     'email',
    //     'password',
    //     'adress',
    //     'logo',
    //     'facebook',
    //     'linkdin',
    //     'instagram',
    //     'google',
    //     'siteweb',
    //     'description',
    //     'heure_debut',
    //     'heure_fin',
    //     'jours',
    //     'code_postal',
    //     'ville',
    //     'categorie',
    //     'role_as',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];



       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','prenom','tel','nom_societe','tel2','Fix',
        'seret','code_naf','libelle','adress','logo','facebook','linkdin','instagram',
        'google','siteweb','description','heure_debut','heure_fin','Semaine','jours','ville','ville2',
        'categorie','specialite','departement','code_postal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
