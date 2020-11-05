<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Episodes;
use Faker\Generator as Faker;

$factory->define(Episodes::class, function (Faker $faker) {
    return [
        'movie_id' => $faker->numberBetween(1,10),
        'episode' => $faker->word(),
        'title' => $faker->word(),
    ];
});
