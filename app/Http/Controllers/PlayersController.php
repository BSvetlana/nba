<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){

        $player = Player::find($id);

        return view('players.show',['player'=>$player]);
    }
}
