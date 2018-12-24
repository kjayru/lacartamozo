<?php

use Faker\Generator as Faker;

$factory->define(App\RestaurantPhoto::class, function (Faker $faker) {
    return [
        'restaurant_detail_id' => App\RestaurantDetail::all()->random()->id,
        'destacado' => $faker->numberBetween($min=1,$max=2),
        'path' => $faker->imageUrl($width=640, $height=480, 'city'), 
    ];
});
