<?php

use Faker\Generator as Faker;

$factory->define(App\UserClientPoint::class, function (Faker $faker) {
    $description = $faker->sentence(4);
    return [
        'client_id' => App\Client::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'points' => rand(5,20),
        'description' => $description,
    ];
});
