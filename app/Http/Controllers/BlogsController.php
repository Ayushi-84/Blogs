<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class BlogsController extends Controller
{
    public function blogs()
    {
        return view('blogs', ['blogs' => Blogs::paginate(8)->sortByDesc('id')]);
    }
    public function myblogs($username)
    {
        if (auth()->check() && auth()->user()->username === $username) {
            return view('myBlog', ['blogs' => Blogs::userData(auth()->id())->sortByDesc('id')]);
        } else {
            return redirect('/');
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
