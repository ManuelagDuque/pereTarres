<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use App\Guide;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    return [
        'guide_id' => function (){
            return factory(Guide::class)->create()->id;
        },
        'material' => $faker->text(55),
        'quantity'=> $faker->numberBetween(1,10),
        'unit'=> 'unidad',
    ];
});
