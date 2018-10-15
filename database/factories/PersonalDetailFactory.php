<?php

use Faker\Generator as Faker;

$factory->define(App\PersonalDetail::class, function (Faker $faker) {
    return [
        'cargo_id' => App\Cargo::all()->random()->id,
        'personal_id' => App\Personal::all()->random()->id,
    ];
});
