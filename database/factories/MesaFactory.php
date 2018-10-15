<?php

use Faker\Generator as Faker;

$factory->define(App\Mesa::class, function (Faker $faker) {
    return [
        'restaurant_detail_id' => App\RestaurantDetail::all()->random()->id,
        'numeromersa' => $faker->numberBetween($min = 1, $max = 20),
        'detalle' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});

