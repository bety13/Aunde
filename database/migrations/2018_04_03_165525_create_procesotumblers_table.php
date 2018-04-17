<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesotumblersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesotumblers', function (Blueprint $table) {
            $table->increments('id_PTum');
            $table->string('pOrilla_PTum')->nullable();
            $table->string('pCentro_PTum')->nullable();
            $table->string('ppOrilla_PTum')->nullable();
            $table->string('pPromedio_PTum')->nullable();
            $table->string('anchoU_PTum')->nullable();
            $table->string('eloncacionW_PTum')->nullable();
            $table->string('eloncacionF_PTum')->nullable();
            $table->string('apariencia_PTum')->nullable();
            $table->string('tono_PTum')->nullable();
            $table->enum('disposicion_Ptum', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PTum')->nullable();
            $table->string('horaE_PTum')->nullable();
            $table->string('analista_PTum');
            $table->string('comentario_PTum')->nullable();

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
        Schema::dropIfExists('procesotumblers');
    }
}
