<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Servicio::class, function (Faker $faker) {
    return [
        'nu_os' => $faker->numberBetween($min = 1, $max = 10),
        'co_usuario' => $faker->numberBetween($min = 1, $max = 10),
        'co_sistema' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
