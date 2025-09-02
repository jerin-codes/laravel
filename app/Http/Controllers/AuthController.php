<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $register){
     
     
        //validating input fields

        $fields=$register->validate([
            'username'=>['required','max:255'],
            'email'=>['required','max:255','email','unique:users,email'],
            'password'=>['required','min:5','confirmed']

           ]);

        //    dd($fields);
           $user= User::create($fields);

           Auth::login($user);

           //rdireting


           return redirect()->route('home');

           


           

    }


    public function login(Request $request){
        $fields=$request->validate([
            // 'username'=>['required','max:255'],
            'email'=>['required','max:255','email'],
            'password'=>['required']

           ]);


          if(Auth::attempt($fields,$request->remember)){
            return redirect()->route('home');
          }else{
            return back()->withErrors([
                'failed'=>"The provided creditials does not match our records"
            ]);
          }
    }


    public function logout(Request $request){
        Auth::logout();

        return redirect()->route('login');
    }
}
