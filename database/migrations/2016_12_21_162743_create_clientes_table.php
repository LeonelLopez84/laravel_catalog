<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create("clientes", function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Rfc',13);
            $table->string('RazonSocial',120);
            $table->string('Telefono',20);
            $table->smallInteger('Status')->default(1);
            $table->smallInteger('Contribuyente');
            $table->string('CorreoEletronico',100);
            $table->integer('Estado')->unsigned();
            $table->integer('Pais');
            $table->decimal('LimiteCredito',18,6);
            $table->date('FechaAlta');
            $table->time('HoraBaja');
            $table->integer('EjecutivoAtiende')->unsigned();
            $table->timestamps();
            
        });


        Schema::table('clientes', function ($table) {
            $table->foreign('Estado')->references('ID')->on('estados');
            $table->foreign('EjecutivoAtiende')->references('ID')->on('ejecutivo_ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
