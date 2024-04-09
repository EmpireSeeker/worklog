<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{

    public function welcome(){
        return view('welcome');
     }




    public function register(Request $request){
        $request->password=bcrypt($request->password);
      //  dd($request->password);
        $details=[
            'name' => $request->name,
            'email' =>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,
            'password_confirmation'=>$request->password_confirmation,
        ];
        $user = new User;
        $user->create($details);
        return redirect()->route('user');

    }



    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->route('admindash')->with('success', 'User deleted successfully');
    }



}

