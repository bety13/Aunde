<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesotermofijadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesotermofijados', function (Blueprint $table) {
            $table->increments('id_PTermo');
            $table->string('pOrilla_PTermo')->nullable();
            $table->string('pCentro_PTermo')->nullable();
            $table->string('ppOrilla_PTermo')->nullable();
            $table->string('pPromedio_PTermo')->nullable();
            $table->string('anchoU_PTermo')->nullable();
            $table->string('elongacionW_PTermo')->nullable();
            $table->string('elongacionF_PTermo')->nullable();
            $table->string('espesor_PTermo')->nullable();
            $table->string('lecColorDL_PTermo')->nullable();
            $table->string('lecColorDA_PTermo')->nullable();
            $table->string('lecColorDB_PTermo')->nullable();
            $table->string('distanciaW_PTermo')->nullable();
            $table->string('tiempoW_PTermo')->nullable();
            $table->string('velocidadW_PTermo')->nullable();
            $table->string('distanciaF_PTermo')->nullable();
            $table->string('tiempoF_PTermo')->nullable();
            $table->string('velocidadF_PTermo')->nullable();
            $table->string('apariencia_PTermo')->nullable();
            $table->string('tono_PTermo')->nullable();
            $table->enum('disposicion_Ptermo', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
            $table->string('fechaE_PTermo')->nullable();
            $table->string('horaE_PTermo')->nullable();
            $table->string('analista_PTermo');
            $table->string('comentario_PTermo')->nullable();

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
        Schema::dropIfExists('procesotermofijados');
    }
}
