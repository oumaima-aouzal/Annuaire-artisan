<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                // 'prenom' => ['required', 'string', 'max:255'],
                // 'nom_societe' => ['required', 'string', 'max:255'],
                // 'tel' => ['required', 'string', 'max:15'],
                // 'tel_2' => ['required', 'string', 'max:15'],
                // 'Fix' => ['required', 'string', 'max:15'],
                // 'seret' => ['required', 'string' ,'min:14' ,'max:22'],
                // 'libelle' => ['required', 'string', 'max:255'],
                // 'code_naf' => ['required', 'string', 'max:255'],
            ]);
        }
        
    }   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'prenom'=>$data['prenom'],
            'tel'=>$data['tel'],
            'nom_societe'=>$data['nom_societe'],
            'tel2'=>$data['tel2'],
            'Fix'=>$data['Fix'],
            'seret'=>$data['seret'],
            'code_naf'=>$data['code_naf'],
            'libelle'=>$data['libelle'],
            'adress'=>$data['adress'],
            'logo'=>$data['logo'],
            'facebook'=>$data['facebook'],
            'linkdin'=>$data['linkdin'],
            'instagram'=>$data['instagram'],
            'google'=>$data['google'],
            'siteweb'=>$data['siteweb'],
            'description'=>$data['description'],
            'heure_debut'=>$data['heure_debut'],
            'heure_fin'=>$data['heure_fin'],
            // 'Semaine'=>$data['Semaine'],
            // 'jours'=>$data['jours'],
            // 'ville'=>$data['ville'],
            // 'ville2'=>$data['ville2'],
            // 'categorie'=>$data['categorie'],
            // 'specialite'=>$data['specialite'],
            // 'departement'=>$data['departement'],
            // 'code_postal'=>$data['code_postal'],

        ]);
    }
    // // {
    // //     return Validator::make($data, [
    // //         'name' => ['required', 'string', 'max:50'],
    // //         'prenom'=>['required', 'string' , 'max:50'],
    // //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    // //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    // //         'nom_entreprise'=>['required', 'string' , 'max:100'],
    // //         'tel_2'=>['required', 'string' ,'min:10' ,'max:13'],
    // //         'tel'=>['required', 'string' ,'min:10' ,'max:13'],
    // //         'Fix'=>['required', 'string' ,'min:10' ,'max:13'],
    // //         'SIRET'=>['required', 'string' ,'min:14' ,'max:22'],
    // //         'naf'=>['required', 'string' ,'min:8' ,'max:10'],
    // //         'libelle'=> ['required', 'string' , 'max:50'],
    // //         'Code_postal'=>['required', 'integer' ,'min:5' ,'max:5'],
    // //         'Ville'=>['required', 'string' , 'max:50'],
    // //         'Adresse'=>['required', 'string' , 'max:50'],
    // //         'discription'=>['required', 'string' , 'max:300'],
    // //         'image'=>['required', 'string' , 'max:1000'],
    // //         'heure_debut'=>['required','time'],
    // //         'heure_fin'=>['required','time'],
    // //         'j_7'=>['required','integer'],
    // //         'url_G'=>['required', 'string' , 'max:1000'],
    // //         'url_L'=>['required', 'string' , 'max:1000'],
    // //         'url_F'=>['required', 'string' , 'max:1000'],
    // //         'url_In'=>['required', 'string' ,'max:1000'],
    // //         'url_G'=>['required', 'string' ,'max:1000'],
    // //         'url_p'=>['required', 'string' , 'max:1000'],

    // //     ]);
    // // }
   
    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    // //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(Request $data)
    // {
        
    //  return    User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),

            
    //     ]);
    // }

    // // public function ind_2(Request $data){
    // //   User::create([
    // //     'name' => $data['name'],
    // //             'prenom'=>$data['prenom'],
    // //             'nom_societe'=>$data['nom_entreprise'],
    // //             'tel1'=>$data['tel'],
    // //             'tel2'=>$data['tel_2'],
    // //             'fix'=>$data['FIX'],
    // //             'email' => $data['email'],
    // //             'password' => Hash::make($data['password']),
    // //             'adress'=>$data['Adresse'],
    // //             'logo'=>$data['image'],
    // //             'facebook'=>$data['url_F'],
    // //             'linkdin'=>$data['url_L'],
    // //             'sieweb'=>$data['url_p'],
    // //             'description'=>$data['discription'],
    // //             'jours'=>$data['j_7'],
    // //             'code_postal'=>$data['code_postal'],
    // //             'ville'=>$data['ville'],
    // //             'categorie'=>$data['categorie'],
    // //             'specialite'=>$data['specialite'],
    // //             'departement'=>$data['departement'],
    // //   ]);
    // //   return back();
    // // }
}
