<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class BlogsController extends Controller
{
    public function blogs()
    {
        return view('blogs', ['blogs' => Blogs::latest()->with('user')->paginate(8)]);
    }
    public function myblogs(User $username)
    {
        if (auth()->user()->username === $username->username) {
            return view('myBlog', ['blogs' => $username->blogs()->latest()->with('user')->paginate(8)]);
        } else {
            abort(401);
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
            Blogs::create($valid->getData());

            return redirect('/');
        }
    }

    public function blogsdetailview($username, $slug)
    {
        return view('blogDetailsView', ['blog' => Blogs::slug($slug)]);
    }
    public function blogsdetail(Blogs $slug)
    {
        return view('blogDetailsView', ['blog' => $slug]);
    }
}
