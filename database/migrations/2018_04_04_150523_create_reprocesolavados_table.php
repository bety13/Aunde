<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesolavadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesolavados', function (Blueprint $table) {
            $table->increments('id_ReLav');
            $table->string('pOrilla_ReLav')->nullable();
            $table->string('pCentro_ReLav')->nullable();
            $table->string('ppOrilla_ReLav')->nullable();
            $table->string('pPromedio_ReLav')->nullable();
            $table->string('anchoU_ReLav')->nullable();
            $table->string('apariencia_ReLav')->nullable();
            $table->enum('disposicion_ReLav', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_ReLav')->nullable();
            $table->string('horaE_ReLav')->nullable();
            $table->string('analista_ReLav');
            $table->string('comentario_ReLav')->nullable();

            
            $table->integer('id_PLav')->unsigned();
            $table->foreign('id_PLav')->references('id_PLav')->on('procesolavados');
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
        Schema::dropIfExists('reprocesolavados');
    }
}
