<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    return [
        'person_franchise_id' => App\PersonFranchise::all()->random()->id,
        'pais' => $faker->country,
        'ciudad' => $faker->city,
        'direccion' => $faker->address, 
        'latitud' => $faker->latitude($min = -17, $max = -4),       
        'longitud' =>$faker->longitude($min = -80, $max = -70),
    ];
});
