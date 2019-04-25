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
        'latitude' => $faker->latitude($min = -75, $max = -68),
        'longitude' => $faker->longitude($min = -20, $max = 20),
        'numesas'=> rand(5,30),
        'status' => '1',
        'country' => $faker->country,
        'email' => $faker->email,
        'sexo' => '2',
        'cashier' => '2',
        'logo' => $faker->image('public/storage/clients',50,50, 'business', false),
        'foto1' => $faker->image('public/storage/clients',160,120, 'business', false),
        'foto2' => $faker->image('public/storage/clients',160,120, 'business', false),
        'foto3' => $faker->image('public/storage/clients',160,120, 'business', false),
        'foto4' => $faker->image('public/storage/clients',160,120, 'business', false),
        'package_id' => rand(1,3),
        'likes' => 0
    ];
});
