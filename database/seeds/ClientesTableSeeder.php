<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100000) as $index) {
    		$min = strtotime('1984-02-27 00:00:00');
		    $max = strtotime(date('Y-m-d H:i:s'));
		    $fecha = date("Y-m-d",rand($min, $max));
		    $hora = date("H:i:s",rand($min, $max));

	        DB::table('clientes')->insert([
	            'Rfc' =>str_random(10),
	            'RazonSocial' =>$faker->name,
	            'Telefono' =>$faker->phoneNumber,
	            'Status' => $faker->numberBetween(0,1),
	            'Contribuyente'=>$faker->numberBetween(0,1),
	            'CorreoElectronico'=>$faker->email,
	            'Estado'=>$faker->numberBetween(1,32),
	            'Pais'=>1,
	            'LimiteCredito'=>(rand(1000,10000)*$faker->randomDigit),
	            'FechaAlta'=>$fecha,
	            'HoraBaja'=>$hora,
	            'EjecutivoAtiende'=> $faker->numberBetween(1,1000),
	            'created_at'    => new DateTime, 
	            'updated_at'    => new DateTime
	        ]);
        }
    }
}
