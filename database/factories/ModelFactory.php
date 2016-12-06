<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(10),
        'content' => $faker-> paragraph(4),
        'user_id' => rand(1, 20),

    ];
});

$factory->define(App\Models\Event::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(10),
        'start' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'place' => $faker->streetAddress,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
        'content' => $faker-> paragraph(4),
        'user_id' => rand(1, 20),

    ];
});
