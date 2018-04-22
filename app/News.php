<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function team(){

        return $this->belongsToMany('App\Team','news_team');
    }
}
