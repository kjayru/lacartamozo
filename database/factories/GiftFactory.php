<?php

use Faker\Generator as Faker;

$factory->define(App\Gift::class, function (Faker $faker) {
    return [ 
        'client_id' => App\Client::all()->random()->id,
        'name' => $faker->name,
        'description' => $faker->text(50),
        'terms' => $faker->text(40),
        'cover' => $faker->image('public/storage/gifts',300,120, 'business', false),
        'display' => 1,
        'repeat' => rand(1,9),
        'points_open' => rand(1,120),
        'sistema' => rand(1,3),
        'distance_permit'=> rand(1,80),
        'zone_gtm' => '-5',
        'limit_start' => 'init temp',
        'limit_end' => 'end temp',
        'prize' => rand(10,50),
    ];
});
