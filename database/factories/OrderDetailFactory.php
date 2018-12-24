<?php

use Faker\Generator as Faker;

$factory->define(App\OrderDetail::class, function (Faker $faker) {
    return [
        'order_id' => App\Order::all()->random()->id,
    ];
});
