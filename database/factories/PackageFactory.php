<?php

use Faker\Generator as Faker;

$factory->define(App\Package::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cost' => $faker->randomNumber(2),
    ];
});
