<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ImgTableSeeder extends Seeder
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
	        DB::table('imgs')->insert([
                'url' => $faker->imageUrl($width = 180, $height = 280,'food'),
                'plato_id' => $faker->numberBetween(1,10),
                //'img' => $faker->imageUrl($width = 640, $height = 480,'food'),
	        ]);
    }	}
}
