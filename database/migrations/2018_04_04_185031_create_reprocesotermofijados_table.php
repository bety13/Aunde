<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesotermofijadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesotermofijados', function (Blueprint $table) {
            $table->increments('id_ReTermo');
            $table->string('pOrilla_ReTermo')->nullable();
            $table->string('pCentro_ReTermo')->nullable();
            $table->string('ppOrilla_ReTermo')->nullable();
            $table->string('pPromedio_ReTermo')->nullable();
            $table->string('anchoU_ReTermo')->nullable();
            $table->string('elongacionW_ReTermo')->nullable();
            $table->string('elongacionF_ReTermo')->nullable();
            $table->string('espesor_ReTermo')->nullable();
            $table->string('lecColorDL_ReTermo')->nullable();
            $table->string('lecColorDA_ReTermo')->nullable();
            $table->string('lecColorDB_ReTermo')->nullable();
            $table->string('distanciaW_ReTermo')->nullable();
            $table->string('tiempoW_ReTermo')->nullable();
            $table->string('velocidadW_ReTermo')->nullable();
            $table->string('distanciaF_ReTermo')->nullable();
            $table->string('tiempoF_ReTermo')->nullable();
            $table->string('velocidadF_ReTermo')->nullable();
            $table->string('apariencia_ReTermo')->nullable();
            $table->string('tono_ReTermo')->nullable();
            $table->enum('disposicion_ReTermo', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_ReTermo')->nullable();
            $table->string('horaE_ReTermo')->nullable();
            $table->string('analista_ReTermo');
            $table->string('comentario_ReTermo')->nullable();

            
            $table->integer('id_PTermo')->unsigned();
            $table->foreign('id_PTermo')->references('id_PTermo')->on('procesotermofijados');
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
        Schema::dropIfExists('reprocesotermofijados');
    }
}
