<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Superhero;
use Faker\Generator as Faker;

$factory->define(Superhero::class, function (Faker $faker) {
    return [
        'nickname'=> $faker->firstName(),
        'real_name'=> $faker->name(),
        'origin_description​'=> $faker->paragraph(20),
        'superpowers'=> $faker->text(200),
        'catch_phrase'=> $faker->text(30),

    ];
});
