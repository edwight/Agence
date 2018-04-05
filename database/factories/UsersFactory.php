<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'no_usuario' => $faker->name,
        'co_usuario_autorizacao' => $faker->numberBetween($min = 1, $max = 10),
        'remember_token' => str_random(10),
    ];
});