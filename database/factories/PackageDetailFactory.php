<?php

use Faker\Generator as Faker;

$factory->define(App\PackageDetail::class, function (Faker $faker) {
    return [
        'package_id' => App\Package::all()->random()->id,
        'customer_detail_id' => App\CustomerDetail::all()->random()->id,
    ];
});
