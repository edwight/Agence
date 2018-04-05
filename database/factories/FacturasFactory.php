<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Factura::class, function (Faker $faker) {
    return [
        'co_cliente' => $faker->numberBetween($min = 1, $max = 10),
        'co_sistema' => $faker->numberBetween($min = 1, $max = 10),
        'co_os' => $faker->numberBetween($min = 1, $max = 10),
        'total' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100), // 48.8932,
        'valor' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100), // 48.8932,
        'data_emissao' => $faker->dateTimeBetween($startDate ='2017-01-01', $endDate='now')->format('Y-m-d'),
        'comissao_cn' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100), // 48.8932,
        'total_imp_inc' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100), // 48.8932,
    ];
});
