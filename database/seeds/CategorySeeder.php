<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
class CategorySeeder extends Seeder
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
	        DB::table('categorias')->insert([
	            'name' => $faker->name,
	            'img' => $faker->imageUrl($width = 640, $height = 480,'food'),
	            
	        ]);
        }
    }
}
