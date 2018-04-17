<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesorepelentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesorepelentes', function (Blueprint $table) {
            $table->increments('id_ReRep');
            $table->string('pOrilla_ReRep')->nullable();
            $table->string('pCentro_ReRep')->nullable();
            $table->string('ppOrilla_ReRep')->nullable();
            $table->string('pPromedio_ReRep')->nullable();
            $table->string('anchoU_ReRep')->nullable();
            $table->string('elongacionW_ReRep')->nullable();
            $table->string('elongacionF_ReRep')->nullable();
            $table->string('repelente_ReRep')->nullable();
            $table->string('velcro_ReRep')->nullable();
            $table->string('croking_ReRep')->nullable();
            $table->string('distanciaW_ReRep')->nullable();
            $table->string('tiempoW_ReRep')->nullable();
            $table->string('velocidadW_ReRep')->nullable();
            $table->string('distanciaF_ReRep')->nullable();
            $table->string('tiempoF_ReRep')->nullable();
            $table->string('velocidadF_ReRep')->nullable();
            $table->string('apariencia_ReRep')->nullable();
            $table->string('tono_ReRep')->nullable();
            $table->enum('disposicion_ReRep', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_ReRep')->nullable();
            $table->string('horaE_ReRep')->nullable();
            $table->string('analista_ReRep');
            $table->string('comentario_ReRep')->nullable();

            
            $table->integer('id_PRep')->unsigned();
            $table->foreign('id_PRep')->references('id_PRep')->on('procesorepelentes');
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
        Schema::dropIfExists('reprocesorepelentes');
    }
}
