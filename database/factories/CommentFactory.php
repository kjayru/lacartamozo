<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    $coment = $faker->sentence(5);
    return [
        'user_id' => App\User::all()->random()->id,
        'coment' => $coment,
        'state' => 1,
        'score' => rand(1,5),
        'client_id' => App\Client::all()->random()->id,
    ];
});
