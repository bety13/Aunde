<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesotumblersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesotumblers', function (Blueprint $table) {
            $table->increments('id_ReTum');
            $table->string('pOrilla_ReTum')->nullable();
            $table->string('pCentro_ReTum')->nullable();
            $table->string('ppOrilla_ReTum')->nullable();
            $table->string('pPromedio_ReTum')->nullable();
            $table->string('anchoU_ReTum')->nullable();
            $table->string('eloncacionW_ReTum')->nullable();
            $table->string('eloncacionF_ReTum')->nullable();
            $table->string('apariencia_ReTum')->nullable();
            $table->string('tono_ReTum')->nullable();
            $table->enum('disposicion_ReTum', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_ReTum')->nullable();
            $table->string('horaE_ReTum')->nullable();
            $table->string('analista_ReTum');
            $table->string('comentario_ReTum')->nullable();

            $table->integer('id_PTum')->unsigned();
            $table->foreign('id_PTum')->references('id_PTum')->on('procesotumblers');
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
        Schema::dropIfExists('reprocesotumblers');
    }
}
