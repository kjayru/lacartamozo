<?php

use Faker\Generator as Faker;

$factory->define(App\RestaurantDetail::class, function (Faker $faker) {
    return [
        'restaurant_id' => App\Restaurant::all()->random()->id,
        'customer_detail_id' => App\CustomerDetail::all()->random()->id,
    ];
});
