<?php

use Illuminate\Database\Seeder;
use App\User;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function(User $u){
            $u->news()->saveMany(News::class,4)->make();
        });
    }
}
