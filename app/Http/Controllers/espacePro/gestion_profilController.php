<?php

namespace App\Http\Controllers\espacePro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Auth;
class gestion_profilController extends Controller
{
    public function index(){
        return view('espace_pro.consultationprofil');
    }
    public function updatePasse(Request $req){

        $user = User::where('id', \Auth::user()->id)->first();  
        if (Hash::check($req->oldpasse, $user->password))
        {
            if($req->newpasse==$req->newpassetwo){
                User::find(\Auth::user()->id)->update(['password'=> Hash::make($req->newpasse)]);
                
                 return back()->with('status','Password change successfully');
            }
            else{
                return back()->with('status','Something wrong');
            }
               

        }

        // $request->validate([

        //     'oldpassword' => ['required', new MatchOldPassword],

        //     'newpasse' => ['required'],

        //     'newpassetwo' => ['same:newpasse'],

        // ]);
        // User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newpasse)]);
        // dd('Password change successfully.');

    }
    
}
