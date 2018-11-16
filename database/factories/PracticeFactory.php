<?php

use Faker\Generator as Faker;

$factory->define(App\Practice::class, function (Faker $faker) {
    return [
        'user_id'  => $faker->numberBetween($min = 1, $max = 10),
        'title'    => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'teacher'  => $faker->firstNameFemale,
        'date'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'time'     => $faker->time($format = 'H:i:s', $max = 'now'),
        'duration' => $faker->numberBetween($min = 60, $max = 150) . ' min'
    ];
});
