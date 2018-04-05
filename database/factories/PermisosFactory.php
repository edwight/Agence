<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Permiso::class, function (Faker $faker) {
    return [
        'co_usuario' => $faker->numberBetween($min = 1, $max = 10),
        'co_tipo_usuario' => $faker->numberBetween($min = 1, $max = 10),
        'co_sistema' =>$faker->numberBetween($min = 1, $max = 4),
        'in_activo' => $faker->randomElement($array = array ('S','N')), // 'S', 'N'
    ];
});
