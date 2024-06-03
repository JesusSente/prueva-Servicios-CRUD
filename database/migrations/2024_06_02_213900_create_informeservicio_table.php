<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformeservicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informeservicio', function (Blueprint $table) {
            $table->id('informeservicio_id');
            $table->string('diagnostico');
            $table->string('solucion');
            $table->unsignedBigInteger('servicio_id');
            $table->timestamps();


            $table->foreign('servicio_id')->references('servicio_id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informeservicio');
    }
}
