<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'referencia' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'pedido'=>  $faker->sentence($nbWords = 2, $variableNbWords = true),
        'restaurant_detail_id' => App\RestaurantDetail::all()->random()->id,
        'customer_detail_id' => App\CustomerDetail::all()->random()->id,
        'order_state_id' => App\OrderState::all()->random()->id,
        'order_type_id' => App\OrderType::all()->random()->id,
        'pay_type_id' => App\PayType::all()->random()->id,
    ];
});
