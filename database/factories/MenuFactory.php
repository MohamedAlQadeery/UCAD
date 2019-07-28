<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Front\Menu;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'ar_name' => $faker->name,
        'en_name' => $faker->name,
        'active' => $faker->randomElement(['0','1']),




    ];
});

