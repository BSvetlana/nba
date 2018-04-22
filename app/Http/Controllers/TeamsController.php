<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $teams = Team::all();

        return view('teams.index',['teams'=>$teams]);
    }

    public function show($id){

        $team = Team::find($id);

        return view('teams.show',['team'=>$team]);
    }

    public function teamNews(Team $team){

        $news = $team->news()->with('teams')->orderBy('created_at','desc')->paginate(4);

        return view('news.index',['news'=>$news]);
    }
}
