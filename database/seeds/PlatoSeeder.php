<?php
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('platos')->insert([
	            'name' => $faker->name,
	            'descripcion' => $faker->text,
	            'precio' => $faker->randomDigit,
	            'vote' => $faker->randomDigit,
                //'img_id' => $faker->numberBetween(1,10),
	            'categoria_id' => $faker->numberBetween(1,10),
	        ]);
        }
    }
}
