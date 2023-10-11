<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CommentsController extends Controller
{
    public function createComment(Posts $id)
    {

        $rules = request()->validate([
            "comment" => 'required|min:3|max:2000'
        ]);
        // Comments::create($rules);
// dd($id);
        $id->comments()->create([...$rules,'user_id'=>auth()->id(),'posts_id'=>$id->id]);

        return back();
    }

    public function deleteComment($id)
    {
        $comment = Comments::find($id);
        if(auth()->id()===$comment->user->id)
        $comment->delete();
        else
        abort(401);

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

            return back();
        }
    }
}
