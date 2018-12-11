<?php

use Faker\Generator as Faker;

$factory->define(App\Franchise::class, function (Faker $faker) {
    return [
        'names' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city, 
        'province' => $faker->state,
        'cellphone' =>$faker->phoneNumber,
        'mail' => $faker->unique()->safeEmail,
        'avatar' => $faker->image('public/storage/franchise',400,300, 'business', false),
        'status' => '1',
        'package_id' => App\Package::all()->random()->id,

        'user_id' => App\User::all()->random()->id,
        'classification_id' => App\Classification::all()->random()->id
    ];
});
