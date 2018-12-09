<?php

use Faker\Generator as Faker;

$factory->define(App\CategoryDetail::class, function (Faker $faker) {
    return [
        'category_id' => App\Category::all()->random()->id,   
        'descripcion' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'precio'  => $faker->randomNumber(2),
        'foto' => $faker->imageUrl($width=640, $height=480, 'city'),
        
    ];
});
