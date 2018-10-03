<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'id' => 1,
        'deliverable_id' => 1,
        'resource_id' => 1,
        'name' => $faker->name,
        'description' => "wow an interesting description",
        'expected_start_date' => $faker->dateTimeThisMonth(),
        'expected_end_date' => $faker->dateTimeThisMonth(),
        'actual_start_date' => $faker->dateTimeThisMonth(),
        'actual_end_date' => $faker->dateTimeThisMonth(),
        'expected_duration_in_days' => 7
    ];
});
