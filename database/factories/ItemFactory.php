<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Front\Menu;
use Faker\Generator as Faker;

$factory->define(\App\Front\Item::class, function (Faker $faker) {
    return [
        'ar_name' => $faker->name,
        'en_name' => $faker->name,
        'active' => $faker->randomElement(['0','1']),
        'menu_id'=>Menu::all()->random()->id,
        'arpage_id'=>\App\Front\Arpage::all()->random()->id,
        'enpage_id'=>\App\Front\Enpage::all()->random()->id,

    ];
});
