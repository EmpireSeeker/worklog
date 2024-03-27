<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user, ){
        $this->user = $user;
    }



    public function admindash(){
        $users = User::all();
        return view('/admindash', ['users' => $users]);
    }
    public function userdash(){
        return view ('/userdash');
    }
    public function register(){
        return view('/register');
    }




    public function login (Request $request){
        $details = $request->only('email', 'password');

      if ( Auth::attempt($details)){
        $user=$this->user->where('email', $request->email)->first();

       if ($user->role !=='admin'){
            return view('/userdash');
        }

        return redirect ('/admindash');
      }
      else {
        return back()->withError(['password' => 'invalid credential']);
      }

    }
}
