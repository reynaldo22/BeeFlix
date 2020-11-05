<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movies;
use Faker\Generator as Faker;

$factory->define(Movies::class, function (Faker $faker) {
    return [
        'genre_id' => $faker->numberBetween(1,3),
        'title' => $faker->word(),
        'photo' => $faker->image(public_path('images'),640,480, null, false),
        'description' => $faker->paragraph(),
        'rating' => $faker->numberBetween(1,5)
    ];
});
