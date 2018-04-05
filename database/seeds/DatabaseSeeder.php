<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FacturasTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(SalariosTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
    }
}
