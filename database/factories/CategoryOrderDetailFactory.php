<?php

use Faker\Generator as Faker;

$factory->define(App\CategoryOrderDetail::class, function (Faker $faker) {
    return [
        'order_detail_id' => App\OrderDetail::all()->random()->id,   
        'category_id' => App\Category::all()->random()->id,
        'payment_id'  => App\Payment::all()->random()->id,
       
    ];
});
