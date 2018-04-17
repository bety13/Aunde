<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesobackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesobackings', function (Blueprint $table) {
             $table->increments('id_ReBack');
            $table->string('pOrilla_ReBack')->nullable();
            $table->string('pCentro_ReBack')->nullable();
            $table->string('ppOrilla_ReBack')->nullable();
            $table->string('pPromedio_ReBack')->nullable();
            $table->string('anchoU_ReBack')->nullable();
            $table->string('elongacionW_ReBack')->nullable();
            $table->string('elongacionF_ReBack')->nullable();
            $table->string('repelente_ReBack')->nullable();
            $table->string('velcro_ReBack')->nullable();
            $table->string('croking_ReBack')->nullable();
            $table->string('distanciaW_ReBack')->nullable();
            $table->string('tiempoW_ReBack')->nullable();
            $table->string('velocidadW_ReBack')->nullable();
            $table->string('distanciaF_ReBack')->nullable();
            $table->string('tiempoF_ReBack')->nullable();
            $table->string('velocidadF_ReBack')->nullable();
            $table->string('apariencia_ReBack')->nullable();
            $table->string('tono_ReBack')->nullable();
            $table->enum('disposicion_ReBack', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_ReBack')->nullable();
            $table->string('horaE_ReBack')->nullable();
            $table->string('analista_ReBack');
            $table->string('comentario_ReBack')->nullable();

            $table->integer('id_PBack')->unsigned();
            $table->foreign('id_PBack')->references('id_PBack')->on('procesobackings');
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
        Schema::dropIfExists('reprocesobackings');
    }
}
