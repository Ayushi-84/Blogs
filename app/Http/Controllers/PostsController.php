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
            $posts=Posts::whereSlug($name)->get()->first();
            if($posts)
            {
                   return $this->blogsDetail($posts);
            }
            abort(404);
        }
    }

    public function createpost()
    {

        $rules = [
            "slug" => 'required|min:3|max:100|alpha_dash',
            "title" => 'required|min:3|max:200',
            "content" => 'required|min:10|max:5000',
            "excerpt" => 'required|min:3|max:2000'
        ];

        $valid = Validator::make(request()->all(), $rules);

        if ($valid->fails()) {
            return dd('Not Validated', $valid);
        } else {
            Posts::create([...$valid->getData(),'user_id'=>auth()->id()]);

            return redirect('/');
        }
    }

    public function blogsdetailview($username, $slug)
    {   $posts=Posts::whereSlug($slug)->get()->first();
        if(auth()->check() && auth()->user()->username === $username)
        return view('blogDetailsView', ['blog' => $posts,
        'comment'=>$posts->comments()->latest()->with('user')->paginate(10)]);
        else
        return redirect('/signin');
    }
    public function edit($username, $slug)
    {
        if(auth()->check() && auth()->user()->username === $username)
        return view('editBlog', ['blog' => Posts::findSlug($slug)]);
        else
        return redirect('/signin');
    }
    public function delete($username, $slug)
    {
        if(auth()->check() && auth()->user()->username === $username)
        return view('deleteBlog', ['blog' => Posts::findSlug($slug)]);
        else
        return redirect('/signin');
    }

    public function blogsdetail($posts)
    {
        return view('blogDetailsView', ['blog' => $posts,
    'comment'=>$posts->comments()->latest()->with('user')->paginate(10)]);
    }

    public function editPost($id){

        $post = Posts::find($id);
        $rules = [
            "content" => 'required|min:10|max:5000',
            "excerpt" => 'required|min:3|max:2000'
        ];

        $valid = Validator::make(request()->all(), $rules);

        if ($valid->fails()) {
            return dd('Not Validated', $valid);
        } else {
            $post->update($valid->getData());

            return redirect('/'.auth()->user()->username);
        }

    }
    public function deletePost($id){
        $post = Posts::find($id);
        if(auth()->id()===$post->user->id)
        $post->delete();
        else
        abort(401);

        return redirect('/'.auth()->user()->username);
    }
}
