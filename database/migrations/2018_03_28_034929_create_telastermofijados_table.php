<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelastermofijadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telastermofijados', function (Blueprint $table) {
            $table->increments('id_Termo');

            $table->string('Diseño_Termo');
            $table->string('color_Termo');
            $table->string('OEM_Termo');

            $table->string('MP_peso_Termo')->nullable();
            $table->string('MP_anchoU_Termo')->nullable();
            $table->string('MP_elongacionW_F_Termo')->nullable();
            $table->string('MP_espesor_Termo')->nullable();
            $table->string('MP_lecColor_Termo')->nullable();
            $table->string('MP_flamabilidad_Termo')->nullable();
            $table->string('MP_apari_Termo')->nullable();
            $table->string('MP_tono_Termo')->nullable();

            $table->string('UM_peso_Termo')->nullable();
            $table->string('UM_anchoU_Termo')->nullable();
            $table->string('UM_elongacionW_F_Termo')->nullable();
            $table->string('UM_espesor_Termo')->nullable();
            $table->string('UM_lecColor_Termo')->nullable();
            $table->string('UM_distanciaW_Termo')->nullable();
            $table->string('UM_tiempoW_Termo')->nullable();
            $table->string('UM_velocidadW_Termo')->nullable();
            $table->string('UM_distanciaF_Termo')->nullable();
            $table->string('UM_tiempoF_Termo')->nullable();
            $table->string('UM_velocidadF_Termo')->nullable();
            $table->string('UM_apari_Termo')->nullable();
            $table->string('UM_tono_Termo')->nullable();

            $table->string('LSE_peso_Termo')->nullable();
            $table->string('LSE_anchoU_Termo')->nullable();
            $table->string('LSE_W_Termo')->nullable();
            $table->string('LSE_F_Termo')->nullable();
            $table->string('LSE_espesor_Termo')->nullable();
            $table->string('LSE_lecColorDL_Termo')->nullable();
            $table->string('LSE_lecColorDA_Termo')->nullable();
            $table->string('LSE_lecColorDB_Termo')->nullable();
            $table->string('LSE_distanciaW_Termo')->nullable();
            $table->string('LSE_tiempoW_Termo')->nullable();
            $table->string('LSE_velocidadW_Termo')->nullable();
            $table->string('LSE_distanciaF_Termo')->nullable();
            $table->string('LSE_tiempoF_Termo')->nullable();
            $table->string('LSE_velocidadF_Termo')->nullable();
            $table->string('LSE_apari_Termo')->nullable();
            $table->string('LSE_tono_Termo')->nullable();
            
            $table->string('LIE_peso_Termo')->nullable();
            $table->string('LIE_anchoU_Termo')->nullable();
            $table->string('LIE_W_Termo')->nullable();
            $table->string('LIE_F_Termo')->nullable();
            $table->string('LIE_espesor_Termo')->nullable();
            $table->string('LIE_lecColorDL_Termo')->nullable();
            $table->string('LIE_lecColorDA_Termo')->nullable();
            $table->string('LIE_lecColorDB_Termo')->nullable();
            $table->string('LIE_distanciaW_Termo')->nullable();
            $table->string('LIE_tiempoW_Termo')->nullable();
            $table->string('LIE_velocidadW_Termo')->nullable();
            $table->string('LIE_distanciaF_Termo')->nullable();
            $table->string('LIE_tiempoF_Termo')->nullable();
            $table->string('LIE_velocidadF_Termo')->nullable();
            $table->string('LIE_apari_Termo')->nullable();
            $table->string('LIE_tono_Termo')->nullable();

            $table->integer('id_Clien')->unsigned();
            $table->foreign('id_Clien')->references('id_Clien')->on('clientes');

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
        Schema::dropIfExists('telastermofijados');
    }
}
