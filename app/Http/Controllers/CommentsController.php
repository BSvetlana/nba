<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use App\Mail\CommentRecive;
use App\Comment;


class CommentsController extends Controller
{

    protected $forbidden_words = ['stupid','idiot','hate'];

    public function __construct()
    {
        $this->middleware('auth',['only'=>'store']);
    }



    public function store($id)
    {


        $this->validate(request(), [

            'content' => 'required|min:10'
        ]);



        if (str_contains(request('content'),$this->forbidden_words)) {

            return view('comments.forbidden-comment',['forbidden_words'=>$this->forbidden_words]);
        } else {

            $comments = new Comment();

            $comments->content = request('content');
            $comments->team_id = $id;
            $comments->user_id = auth()->user()->id;

            $comments->save();


            return redirect()->back();

        }

    }


}
