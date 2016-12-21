<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class EjecutivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,1000) as $index) {
	        DB::table('ejecutivo_ventas')->insert([
	            'Nombre' => $faker->name,
	            'ApellidoPaterno' => $faker->lastName,
	            'ApellidoMaterno' => str_random(10),
	            'created_at'    => new DateTime, 
	            'updated_at'    => new DateTime
	        ]);
        }
    }
}
