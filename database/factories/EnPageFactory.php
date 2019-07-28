<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Front\Enpage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->realText(),
        'type' => $faker->randomElement(['0','1','2']),
        'meta_desc'=>$faker->text,
        'meta_key'=>$faker->text,


    ];
});
