<?php

use Faker\Generator as Faker;

$factory->define(App\CustomerLocation::class, function (Faker $faker) {
    return [
        'latitud' => $faker->latitude($min = -17, $max = -4),   
        'longitud' =>$faker->longitude($min = -80, $max = -70),
    ];
});
