<?php

use Faker\Generator as Faker;

$factory->define(App\MenuIngredient::class, function (Faker $faker) {
    return [
        'menu_id' => App\Menu::all()->random()->id,
        'ingredient_id' => App\Ingredient::all()->random()->id,
    ];
});
