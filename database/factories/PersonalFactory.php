<?php

use Faker\Generator as Faker;

$factory->define(App\Personal::class, function (Faker $faker) {
    return [
        'names' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,
    ];
});
