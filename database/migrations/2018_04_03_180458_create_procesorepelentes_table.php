<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesorepelentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesorepelentes', function (Blueprint $table) {
            $table->increments('id_PRep');
            $table->string('pOrilla_PRep')->nullable();
            $table->string('pCentro_PRep')->nullable();
            $table->string('ppOrilla_PRep')->nullable();
            $table->string('pPromedio_PRep')->nullable();
            $table->string('anchoU_PRep')->nullable();
            $table->string('elongacionW_PRep')->nullable();
            $table->string('elongacionF_PRep')->nullable();
            $table->string('repelente_PRep')->nullable();
            $table->string('velcro_PRep')->nullable();
            $table->string('croking_PRep')->nullable();
            $table->string('distanciaW_PRep')->nullable();
            $table->string('tiempoW_PRep')->nullable();
            $table->string('velocidadW_PRep')->nullable();
            $table->string('distanciaF_PRep')->nullable();
            $table->string('tiempoF_PRep')->nullable();
            $table->string('velocidadF_PRep')->nullable(); 
            $table->string('apariencia_PRep')->nullable();
            $table->string('tono_PRep')->nullable();
            $table->enum('disposicion_PRep', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PRep')->nullable();
            $table->string('horaE_PRep')->nullable();
            $table->string('analista_PRep');
            $table->string('comentario_PRep')->nullable();

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
        Schema::dropIfExists('procesorepelentes');
    }
}
