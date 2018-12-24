<?php

use Faker\Generator as Faker;

$factory->define(App\Salsa::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo' => $faker->image('public/storage/salsas',400,300, 'people', false),
        'description' => $faker->text,
        'client_id' => App\Client::all()->random()->id,
    ];
});
