<?php

use Faker\Generator as Faker;

$factory->define(App\PersonFranchiseRestaurant::class, function (Faker $faker) {
   
        return [
            'person_franchise_id' => \App\PersonFranchise::all()->random()->id,
            'restaurant_id' => \App\Restaurant::all()->random()->id,
        ];
   
});
