<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogs(){
        return view('myBlogs',['blogs'=>blogs::all()]);
    }
}
