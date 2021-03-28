<?php

use Faker\Generator as Faker;
/** @var FactoryGenerator $factory */
$factory->define(App\Newspost::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'content' => $faker->text(1000),
        'teaser' => $faker->text(300),
//        'image' => $faker->image('public\img', 300, 300, 'bmw')
    ];
});
