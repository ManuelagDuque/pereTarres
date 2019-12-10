<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guide;
use Faker\Generator as Faker;

$factory->define(Guide::class, function (Faker $faker) {
    return [
        'title'=> $faker->title(),
        'topic'=> $faker->title(),
        'author'=> $faker->name(),
        'year'=> $faker->year(),
        'picture'=> $faker->url,
        'goal'=> $faker->word,
        'description'=> $faker->paragraph,
        'assistants_quantity' => $faker->numberBetween(0,3),
        'duration_hours' => $faker->numberBetween(1,8),
        'methodology' => $faker->word(),
    ];
});
