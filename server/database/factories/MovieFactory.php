<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Movie;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Movie::class, function (Faker $faker) {
    $title = $faker->word;
    return [
        'title'=>$title,
        'slug'=>Str::slug($title),
        'img'=>$faker->imageUrl,
        'country'=>$faker->country,
        'imdb'=>rand(4,10),
        'duration'=>rand(60,140),
        'released'=>rand(2000,2020),
        'description'=>$faker->paragraph
    ];
});
