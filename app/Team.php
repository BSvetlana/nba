<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players(){

        return $this->hasMany('App\Player');
    }

    public function addComment($data)
    {
        $this->comments()->create($data);
    }

    public function comments(){

        return $this->hasMany('\App\Comment');
    }

    public function news(){

        return $this->belongsToMany('App\Team','news_team');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
