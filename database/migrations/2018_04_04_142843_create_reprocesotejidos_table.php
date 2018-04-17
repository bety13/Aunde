<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesotejidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesotejidos', function (Blueprint $table) {
             $table->increments('id_ReTej');
            $table->string('pOrilla_ReTej')->nullable();
            $table->string('pCentro_ReTej')->nullable();
            $table->string('ppOrilla_ReTej')->nullable();
            $table->string('pPromedio_ReTej')->nullable();
            $table->string('anchoU_ReTej')->nullable();
            $table->string('apariencia_ReTej')->nullable();
            $table->enum('disposicion_ReTej', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_ReTej')->nullable();
            $table->string('horaE_ReTej')->nullable();
            $table->string('analista_ReTej');
            $table->string('comentario_ReTej')->nullable();

            $table->integer('id_PTej')->unsigned();
            $table->foreign('id_PTej')->references('id_PTej')->on('procesotejidos');

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
        Schema::dropIfExists('reprocesotejidos');
    }
}
