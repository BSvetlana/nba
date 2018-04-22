<?php

namespace App\Http\Controllers;

use App\News;
use App\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $news = News::with('user')->latest()->orderBy('created_at','desc')->paginate(3);

        return view('news.index',compact('news'));
    }

    public function show($id){

        $oneNews = News::find($id);

        return view('news.show',compact('oneNews'));
    }

    public  function create(){

        $teams = Team::all();

        return view('news.create',compact('teams'));
    }

    public function store(){

        $this->validate(request(),[
            'title'=>'required',
            'content'=>'required'
        ]);

        $news = new News();

        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = auth()->user()->id;

        $news->save();

        $news->team()->attach(request('teams'));

        session()->flash('success_message', 'Thank you for publishing article on www.nba.com');

        return redirect('news');
    }
}
