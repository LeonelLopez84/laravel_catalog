<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjecutivoVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("ejecutivo_ventas", function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Nombre',100);
            $table->string('ApellidoPaterno',100);
            $table->string('ApellidoMaterno',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ejecutivo_ventas');
    }
}
