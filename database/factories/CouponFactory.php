<?php

use Faker\Generator as Faker;
use App\Client;

$factory->define(App\Coupon::class, function (Faker $faker) {
    return [ 
        'client_id' => Client::all()->random()->id,
        'title' =>  $faker->name,
        'product' => $faker->name,
        'conditions' => $faker->text(40),
        'amount' => rand(10,20),
        'descuent' => rand(1,7),
        'days' => rand(1,10),
        'uses' => 0,
        'points_required' => rand(10,150),
        'cover'=> $faker->image('public/storage/coupons',300,120, 'business', false),
        'state' => '2',
    ];
});
