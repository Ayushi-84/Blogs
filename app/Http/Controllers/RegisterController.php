<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('signUp');
    }
    public function register()
    {
        $data = request()->validate([
            "firstName" => 'required|min:3|max:20|alpha',
            "lastName" => 'required|min:3|max:20|alpha',
            "username" => 'required|min:3|max:20|alpha_num',
            "email" => 'required|email|min:11|max:50|unique:users,email',
            "mobileNumber" => 'required|min:10|max:10|unique:users,mobileNumber',
            "password" => ['required', 'min:3', 'max:20', 'not_regex:/^[a-zA-Z0-9]+$/u']
        ]);

        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }
}
