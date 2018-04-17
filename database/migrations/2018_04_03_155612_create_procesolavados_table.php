<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesolavadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesolavados', function (Blueprint $table) {
            $table->increments('id_PLav');
            $table->string('pOrilla_PLav')->nullable();
            $table->string('pCentro_PLav')->nullable();
            $table->string('ppOrilla_PLav')->nullable();
            $table->string('promedio_PLav')->nullable();
            $table->string('anchoU_PLav')->nullable();
            $table->string('apariencia_PLav')->nullable();
            $table->enum('disposicion_PLav', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PLav')->nullable();
            $table->string('horaE_PLav')->nullable();
            $table->string('analista_PLav');
            $table->string('comentario_PLav')->nullable();

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
        Schema::dropIfExists('procesolavados');
    }
}
