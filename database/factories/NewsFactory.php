<?php

use Faker\Generator as Faker;
use App\News;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(1,true),
        'content'=>$faker->text(1000)
    ];
});
