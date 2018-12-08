<?php

use Faker\Generator as Faker;

$factory->define(App\PersonFranchise::class, function (Faker $faker) {
    return [
        
        'user_id' => App\User::all()->random()->id,
        'pais' => $faker->country,
        'ciudad' => $faker->city, 
    ];
});
