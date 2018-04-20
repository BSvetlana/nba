<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use App\Mail\CommentRecive;

class CommentsController extends Controller
{
    public function store($id){

        $this->validate(request(),[

            'content'=>'required|min:10'
        ]);

        $comment = Team::find($id);

        $comment->addComment([ 'content' => request('content'), 'team_id' => $comment->id, 'user_id' => auth()->user()->id]);



        return back();

    }
}
