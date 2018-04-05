<?php

use Illuminate\Database\Seeder;

class SalariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Salario', 10)->create();
    }
}
