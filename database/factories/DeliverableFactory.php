<?php

use Faker\Generator as Faker;

$factory->define(App\Deliverable::class, function (Faker $faker) {
    return [
        'id' => 1,
        'name' => $faker->name,
        'description' => "Wow an interesting description",
        'due_date' => $faker->dateTimeThisMonth(),
        'status' => "this is a status"
    ];
});
