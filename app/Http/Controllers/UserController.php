<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Quote;


class UserController extends Controller
{
    protected $user;

    public function __construct(User $user, ){
        $this->user = $user;
    }





    public function admindash(){
        $users = User::all();
        $user = auth()->user()->name;
        $orders = Quote::all();
        return view('/admindash', ['users' => $users, 'orders'=>$orders]);
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



    public function order (){
        $user = auth()->user()->name;
        //dd($user);
        $quote = new Quote;
        $orders = $quote->where('name', $user)->get();
        //dd($orders);
        return view('order', ['orders' => $orders]);

    }
}
