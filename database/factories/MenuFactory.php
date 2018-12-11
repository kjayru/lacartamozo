<?php

use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [

        'titulo' =>  $faker->title,
        'price1' => $faker->randomNumber(2),
        'price2' => $faker->randomNumber(2),
        'igv' => '17',
        'calories' => '10%',
        'cheff' => '1',
        'celiaco' => '1',
        'delivery'=>'1',
        'vegetariano' => '1',
        'state' => '1',
        'category_id' => App\Category::all()->random()->id,
        
       
    ];
});
