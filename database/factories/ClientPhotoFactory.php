<?php

use Faker\Generator as Faker;

$factory->define(App\ClientPhoto::class, function (Faker $faker) {
    return [
        'client_id' => App\Client::all()->random()->id,
        'photo' => $faker->image('public/storage/clients',90,90, 'food', false),
    ];
});
