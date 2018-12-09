<?php

use Faker\Generator as Faker;
use App\CustomerState;
use App\Cliente;

$factory->define(App\CustomerDetail::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'customer_state_id' => 2,
        
    ];
});
