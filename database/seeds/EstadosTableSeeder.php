<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->delete();

        $estados=['Aguascalientes',
				'Baja California',
				'Baja California Sur',
				'Campeche',
				'Chiapas',
				'Chihuahua',
				'Coahuila',
				'Colima',
				'Distrito Federal',
				'Durango',
				'Estado de México',
				'Guanajuato',
				'Guerrero',
				'Hidalgo',
				'Jalisco',
				'Michoacán',
				'Morelos',
				'Nayarit',
				'Nuevo León',
				'Oaxaca',
				'Puebla',
				'Querétaro',
				'Quintana Roo',
				'San Luis Potosí',
				'Sinaloa',
				'Sonora',
				'Tabasco',
				'Tamaulipas',
				'Tlaxcala',
				'Veracruz',
				'Yucatán',
				'Zacatecas'];

		foreach($estados as $val){

        	DB::table('estados')->insert([
	            'Nombre'  => $val, 
	            'Pais' => 1,
	            'created_at'    => new DateTime, 
	            'updated_at'    => new DateTime
        	]);
        }
    }
}
