<?php

use Faker\Generator as Faker;

$factory->define(App\Ride::class, function (Faker $faker) {
    return [
        //'user_id'       => '1',
        'title'         => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'date'          => $faker->date,
        'distance'      => $faker->numberBetween($min = 35, $max = 150) . ' km',
        'duration'      => $faker->numberBetween($min = 60, $max = 150) . ' min',
        'type'          => $faker->word,
        'weather'       => $faker->word,
        'link_strava'   => 'https://www.strava.com/activities/1916145149',
        'link_garmin'   => 'https://connect.garmin.com/modern/activity/3102949046',
        'remarks'       => $faker->paragraph
    ];
});
