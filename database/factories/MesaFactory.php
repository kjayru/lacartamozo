<?php

use Faker\Generator as Faker;

$factory->define(App\Mesa::class, function (Faker $faker) {
    return [
        'client_id' => App\Client::all()->random()->id,
        'codeqr' => '/dist/img/qr_sample.png',
        'nummesas' =>  $faker->numberBetween($min = 1, $max = 20),
    ];
});

