<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id('servicio_id');
            $table->date('fecha_recibido');
            $table->date('fecha_entrega');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('tecnico_id');
            $table->unsignedBigInteger('tiposervicio_id');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('equipo_id');
            $table->decimal('costo_servicio', 8, 2);
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('tecnico_id')->references('tecnico_id')->on('tecnicos');
            $table->foreign('tiposervicio_id')->references('tiposervicio_id')->on('tiposervicio');
            $table->foreign('estado_id')->references('estado_id')->on('estados');
            $table->foreign('equipo_id')->references('equipo_id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
