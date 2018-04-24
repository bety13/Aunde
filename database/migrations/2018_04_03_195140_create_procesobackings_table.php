<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesobackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesobackings', function (Blueprint $table) {
            $table->increments('id_PBack');
            $table->string('pOrilla_PBack')->nullable();
            $table->string('pCentro_PBack')->nullable();
            $table->string('ppOrilla_PBack')->nullable();
            $table->string('pPromedio_PBack')->nullable();
            $table->string('anchoU_PBack')->nullable();
            $table->string('elongacionW_PBack')->nullable();
            $table->string('elongacionF_PBack')->nullable();
            $table->string('repelente_PBack')->nullable();
            $table->string('velcro_PBack')->nullable();
            $table->string('croking_PBack')->nullable();
            $table->string('distanciaW_PBack')->nullable();
            $table->string('tiempoW_PBack')->nullable();
            $table->string('velocidadW_PBack')->nullable();
            $table->string('distanciaF_PBack')->nullable();
            $table->string('tiempoF_PBack')->nullable();
            $table->string('velocidadF_PBack')->nullable();
            $table->string('apariencia_PBack')->nullable();
            $table->string('tono_PBack')->nullable();
            $table->enum('disposicion_PBack', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PBack')->nullable();
            $table->string('horaE_PBack')->nullable();
            $table->string('analista_PBack');
            $table->string('comentario_PBack')->nullable();

            $table->integer('id_Procesos')->unsigned();
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
        Schema::dropIfExists('procesobackings');
    }
}
