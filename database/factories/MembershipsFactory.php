<?php

use Faker\Generator as Faker;

$factory->define(App\Membership::class, function (Faker $faker) {
    return [
        'name' => $faker->domainWord,
        'price' => $faker->randomNumber(2),
    ];
});
