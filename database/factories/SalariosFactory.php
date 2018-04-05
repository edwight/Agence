<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Salario::class, function (Faker $faker) {
    return [
        'co_usuario' => $faker->numberBetween($min = 1, $max = 10),
        'brut_salario' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'liq_salario' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
    ];
});
