<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    public function login(){
        return view('signIn');
    }
    public function verify(){
        $data= request()->validate([
             "email"=>'required|email|min:11|max:50',
             "password"=>'required|min:3|max:20'
        ]);

        if(auth()->attempt($data))
        {
             $userData=User::user(auth()->id());
            auth()->login($userData);
            $name=$userData->username;
            return redirect('/myBlog/'.$name)->with('success','Login Successfully');
        }

        return back()->withErrors(['email'=>"Invalid/Incorrect email address"]);
    }
}
