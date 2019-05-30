<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    //mesas y sector aleatorio
    return [
        'amount' => rand(1,12),
        'day' => $faker->date(),
        'start' => $faker->time(),
        'end' => $faker->time(),
        'sector_id' => App\Sector::all()->random()->id, 
        'mesa_id' => App\Mesa::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'bookingstate_id' => $faker->latitude($min = -75, $max = -68),
        'client_id' => App\Client::all()->random()->id, 
    ];
});
