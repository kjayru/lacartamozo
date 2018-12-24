<?php

use Faker\Generator as Faker;

$factory->define(App\MenuPhoto::class, function (Faker $faker) {
    return [
        'menu_id' => App\Menu::all()->random()->id,
        'photo' =>\Faker\Provider\Image::image('public/storage/menus',400,300, 'food', false),
    ];
});
