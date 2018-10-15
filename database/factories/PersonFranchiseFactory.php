<?php

use Faker\Generator as Faker;

$factory->define(App\PersonFranchise::class, function (Faker $faker) {
    return [
        'names' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'pais' => $faker->country,
        'ciudad' => $faker->city, 
    ];
});
