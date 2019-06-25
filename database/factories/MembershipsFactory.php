<?php

use Faker\Generator as Faker;

$factory->define(App\Memberships::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'price' => $faker->randomNumber(2),
        'vigencia' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+30 years', $timezone = null), 
    ];
});
