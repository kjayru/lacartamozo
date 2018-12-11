<?php

use Faker\Generator as Faker;

$factory->define(App\Ingredient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomNumber(2),
        'calorias' => $faker->randomNumber(2),
        'client_id' => App\Client::all()->random()->id,
    ];
});
