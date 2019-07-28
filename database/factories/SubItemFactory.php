<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
//

$factory->define(\App\Front\Subitem::class, function (Faker $faker) {
    return [
        //
        'ar_name' => $faker->name,
        'en_name' => $faker->name,
        'active' => $faker->randomElement(['0','1']),
        'item_id'=>\App\Front\Item::all()->random()->id,
        'arpage_id'=>\App\Front\Arpage::all()->random()->id,
        'enpage_id'=>\App\Front\Enpage::all()->random()->id,


    ];
});
