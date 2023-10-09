<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function blogs()
    {
        return view('blogs', ['blogs' => Posts::latest()->with('user')->paginate(8)]);
    }
    public function myblogs($name)
    {
        $user=User::whereUsername($name)->get()->first();
        if ($user) {
            if(auth()->check() && auth()->user()->username === $user->username)
            return view('myBlog', ['blogs' => $user->posts()->latest()->with('user')->paginate(8)]);
            else
            abort(401);
        }
        else {
            $post=Posts::whereSlug($name)->get()->first();
            if($post)
            {
                   return $this->blogsDetail($post);
            }
            abort(404);
        }
    }

    public function createpost()
    {

        $rules = [
            "user_id" => 'required',
            "slug" => 'required|min:3|max:100|alpha_dash',
            "title" => 'required|min:3|max:200',
            "content" => 'required|min:10|max:5000',
            "excerpt" => 'required|min:3|max:2000'
        ];

        $valid = Validator::make(request()->all(), $rules);

        if ($valid->fails()) {
            return dd('Not Validated', $valid);
        } else {
            Posts::create($valid->getData());

            return redirect('/');
        }
    }

    public function blogsdetailview($username, $slug)
    {
        return view('blogDetailsView', ['blog' => Posts::findSlug($slug)]);
    }
    
    public function blogsdetail($post)
    {
        return view('blogDetailsView', ['blog' => $post]);
    }
}
