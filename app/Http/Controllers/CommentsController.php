<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function createComment()
    {

        $rules = request()->validate([
            "user_id" => 'required',
            "posts_id" => 'required',
            "comment" => 'required|min:3|max:2000'
        ]);
        Comments::create($rules);

        return redirect('/');
    }

    public function deleteComment($id)
    {
        $comment = Comments::find($id);
        $comment->delete();

        return back();
    }

    public function edit($username, $id)
    {
        if (auth()->check() && auth()->user()->username === $username)
            return view('editComment', ['comment' => Comments::find($id)]);
        else
            return redirect('/signin');
    }

    public function editComment($id)
    {

        $comment = Comments::find($id);
        $rules = [
            "comment" => 'required|min:3|max:2000'
        ];

        $valid = Validator::make(request()->all(), $rules);

        if ($valid->fails()) {
            return dd('Not Validated', $valid);
        } else {
            $comment->update($valid->getData());

            return redirect('/');
        }
    }
}
