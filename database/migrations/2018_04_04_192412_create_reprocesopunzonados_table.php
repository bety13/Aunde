<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesopunzonadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesopunzonados', function (Blueprint $table) {
            $table->increments('id_RePunzo');
            $table->string('pOrilla_RePunzo')->nullable();
            $table->string('pCentro_RePunzo')->nullable();
            $table->string('ppOrilla_RePunzo')->nullable();
            $table->string('pPromedio_RePunzo')->nullable();
            $table->string('anchoU_RePunzo')->nullable();
            $table->string('apariencia_RePunzo')->nullable();
            $table->enum('disposicion_RePunzo', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_RePunzo')->nullable();
            $table->string('horaE_RePunzo')->nullable();
            $table->string('analista_RePunzo');
            $table->string('comentario_RePunzo')->nullable();

            $table->integer('id_PPunzo')->unsigned();
            $table->foreign('id_PPunzo')->references('id_PPunzo')->on('procesopunzonados');
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
        Schema::dropIfExists('reprocesopunzonados');
    }
}
