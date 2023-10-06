<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('signUp');
    }
    public function register(){
       $data= request()->validate([
            "firstName"=>'required|min:3|max:20',
             "lastName"=>'required|min:3|max:20',
             "email"=>'required|email|min:11|max:50',
             "mobileNumber"=>'required|min:10|max:10',
             "password"=>'required|min:3|max:20'
        ]);

        $user=User::create($data);
        
          auth()->login($user);

        return redirect('/');
    }
}
