<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class BlogsController extends Controller
{
    public function blogs(){
        return view('blogs',['blogs'=>blogs::all()->sortByDesc('id')]);
    }
    public function myblogs(){
        if(auth()->check())
        {
        return view('myBlog',['blogs'=>blogs::user(auth()->id())->sortByDesc('id')]);
        }
        else{
            return redirect('/');
        }

    }

    public function createpost(){

        $rules=[
            "user_id"=>'required',
             "slug"=>'required|min:3|max:100',
             "title"=>'required|min:3|max:200',
             "content"=>'required|min:10|max:5000',
             "excerpt"=>'required|min:3|max:2000'
        ];

        $valid=Validator::make(request()->all(),$rules);

        if($valid->fails())
        {
            return dd('Not Validated',$valid);
        }
        else{
            blogs::create($valid->getData());

            return redirect('/blogs');
        }

    }

    public function blogsdetailview($slug) {
        //  return view('blogDetailsView',['blog'=>blogs::select('title','content')->where('slug',request()->query("slug"))->get()]);
         return view('blogDetailsView',['blog'=>blogs::slug($slug)]);
            }

}
