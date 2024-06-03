<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('equipo_id');
            $table->unsignedBigInteger('tipoequipo_id');
            $table->unsignedBigInteger('marca_id');
            
            $table->timestamps();

            
            $table->foreign('tipoequipo_id')->references('tipoequipo_id')->on('tipoequipo');
            $table->foreign('marca_id')->references('marca_id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
