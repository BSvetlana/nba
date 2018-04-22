<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $news = News::with('user')->latest()->paginate(2);

        return view('news.index',compact('news'));
    }

    public function show($id){

        $oneNews = News::find($id);

        return view('news.show',compact('oneNews'));
    }
}
