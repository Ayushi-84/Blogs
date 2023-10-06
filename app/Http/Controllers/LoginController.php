<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return redirect('/myBlog')->with('success','Login Successfully');
        }

        return back()->withErrors(['email'=>"Invalid/Incorrect email address"]);
    }
}
