<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
//
//$table->string('name');
//$table->mediumText('content');
//$table->string('keywords');
//$table->string('meta_desc');
//$table->enum('type',['0','1','2']); //0 مقال 1 اخبار 2 اعلانات


$factory->define(\App\Front\Arpage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->realText(),
        'type' => $faker->randomElement(['0','1','2']),
        'meta_desc'=>$faker->text,
        'meta_key'=>$faker->text,

    ];
});
