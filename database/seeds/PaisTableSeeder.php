<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->delete();
        DB::table('pais')->insert([
            'ID'            => 1, 
            'Nombre'  => 'México', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
        ]);
    }
}
