<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
            'name' => $faker->jobTitle,
            'display_name' => $faker->streetName,
            'description' => $faker->streetAddress,
        ];
});
