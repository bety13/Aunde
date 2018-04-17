<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesopunzonadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesopunzonados', function (Blueprint $table) {
            $table->increments('id_PPunzo');
            $table->string('pOrilla_PPunzo')->nullable();
            $table->string('pCentro_PPunzo')->nullable();
            $table->string('ppOrilla_PPunzo')->nullable();
            $table->string('pPromedio_PPunzo')->nullable();
            $table->string('anchoU_PPunzo')->nullable();
            $table->string('apariencia_PPunzo')->nullable();
            $table->enum('disposicion_PPunzo', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PPunzo')->nullable();
            $table->string('horaE_PPunzo')->nullable();
            $table->string('analista_PPunzo');
            $table->string('comentario_PPunzo')->nullable();

            $table->integer('id_Ramas')->unsigned()->nullable();
            $table->foreign('id_Ramas')->references('id_Ramas')->on('procesoramas');

            
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
        Schema::dropIfExists('procesopunzonados');
    }
}
