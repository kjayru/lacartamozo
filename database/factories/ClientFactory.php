<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'franchise_id' => App\Franchise::all()->random()->id,
        'cover' => $faker->image('public/storage/clients',400,300, 'business', false),
        'name' => $faker->company,
        'address' => $faker->address,
        'city' => $faker->city,
        'province' => $faker->state,
        'cellphone' => $faker->phoneNumber,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'numesas'=> '20',
        'status' => '2',
    ];
});
