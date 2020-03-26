<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 10, $indexSize = 2),
        'director' => $faker->name(),
        'imageUrl' => $faker->url(),
        'duration' => 90,
        'relaseDate' => $faker->dateTime($max = 'now', $timezone = null),
        'genre' => 'comedy'
    ];
});
