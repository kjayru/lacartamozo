<?php

use Faker\Generator as Faker;

$factory->define(App\Mozo::class, function (Faker $faker) {
    return [
        'avatar' => $faker->image('public/storage/mozos',400,300, 'people', false),
        'name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'cellphone' => $faker->e164PhoneNumber,
        'status' => '2',
        'client_id' => App\Client::all()->random()->id,
    ];
});
