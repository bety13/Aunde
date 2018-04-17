<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesotejidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesotejidos', function (Blueprint $table) {
            $table->increments('id_PTej');
            $table->string('pOrilla_PTej')->nullable();
            $table->string('pCentro_PTej')->nullable();
            $table->string('ppOrilla_PTej')->nullable();
            $table->string('promedio_PTej')->nullable();
            $table->string('anchoU_PTej')->nullable();
            $table->string('apariencia_PTej')->nullable();
            $table->enum('disposicion_PTej', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PTej')->nullable();
            $table->string('horaE_PTej')->nullable();
            $table->string('analista_PTej');
            $table->string('comentario_PTej')->nullable();

            $table->integer('id_Procesos')->unsigned()->nullable();
            $table->foreign('id_Procesos')->references('id_Procesos')->on('procesos');

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
        Schema::dropIfExists('procesotejidos');
    }
}
