<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelasbondeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telasbondeos', function (Blueprint $table) {
            $table->increments('id_Bondeo');
            $table->string('Diseño_Bondeo');
            $table->string('color_Bondeo');
            $table->string('OEM_Bondeo');

            $table->string('MP_peso_Bondeo')->nullable();
            $table->string('MP_espesor_Bondeo')->nullable();
            $table->string('MP_anchoU_Bondeo')->nullable();
            $table->string('MP_adhesion_Bondeo')->nullable();
            $table->string('MP_elongacion_Bondeo')->nullable();
            $table->string('MP_flamabilidad_Bondeo')->nullable();
            $table->string('MP_apariencia_Bondeo')->nullable();
            $table->string('MP_tono_Bondeo')->nullable();
            $table->string('MP_recuperacion_Bondeo')->nullable();
            $table->string('MP_lecColor_Bondeo')->nullable();

            $table->string('UM_peso_Bondeo')->nullable();
            $table->string('UM_espesor_Bondeo')->nullable();
            $table->string('UM_anchoU_Bondeo')->nullable();
            $table->string('UM_adhesion_Bondeo')->nullable();
            $table->string('UM_elongacion_Bondeo')->nullable();
            $table->string('UM_distanciaW_Bondeo')->nullable();
            $table->string('UM_tiempoW_Bondeo')->nullable();
            $table->string('UM_velocidadW_Bondeo')->nullable();
            $table->string('UM_distanciaF_Bondeo')->nullable();
            $table->string('UM_tiempoF_Bondeo')->nullable();
            $table->string('UM_velocidadF_Bondeo')->nullable();
            $table->string('UM_apariencia_Bondeo')->nullable();
            $table->string('UM_tono_Bondeo')->nullable();
            $table->string('UM_recuperacion_Bondeo')->nullable();
            $table->string('UM_lecColor_Bondeo')->nullable();

            $table->string('LSE_peso_Bondeo')->nullable();
            $table->string('LSE_espesor_Bondeo')->nullable();
            $table->string('LSE_anchoU_Bondeo')->nullable();
            $table->string('LSE_adhesionWTU_Bondeo')->nullable();
            $table->string('LSE_adhesionFTU_Bondeo')->nullable();
            $table->string('LSE_adhesionWSU_Bondeo')->nullable();
            $table->string('LSE_adhesionFSU_Bondeo')->nullable();
            $table->string('LSE_elongacionW_Bondeo')->nullable();
            $table->string('LSE_elongacionF_Bondeo')->nullable();
            $table->string('LSE_distanciaW_Bondeo')->nullable();
            $table->string('LSE_tiempoW_Bondeo')->nullable();
            $table->string('LSE_velocidadW_Bondeo')->nullable();
            $table->string('LSE_distanciaF_Bondeo')->nullable();
            $table->string('LSE_tiempoF_Bondeo')->nullable();
            $table->string('LSE_velocidadF_Bondeo')->nullable();
            $table->string('LSE_apariencia_Bondeo')->nullable();
            $table->string('LSE_tono_Bondeo')->nullable();
            $table->string('LSE_recuperacion_Bondeo')->nullable();
            $table->string('LSE_lecColordL_Bondeo')->nullable();
            $table->string('LSE_lecColorda_Bondeo')->nullable();
            $table->string('LSE_lecColordb_Bondeo')->nullable();

            $table->string('LIE_peso_Bondeo')->nullable();
            $table->string('LIE_espesor_Bondeo')->nullable();
            $table->string('LIE_anchoU_Bondeo')->nullable();
            $table->string('LIE_adhesionWTU_Bondeo')->nullable();
            $table->string('LIE_adhesionFTU_Bondeo')->nullable();
            $table->string('LIE_adhesionWSU_Bondeo')->nullable();
            $table->string('LIE_adhesionFSU_Bondeo')->nullable();
            $table->string('LIE_elongacionW_Bondeo')->nullable();
            $table->string('LIE_elongacionF_Bondeo')->nullable();
            $table->string('LIE_distanciaW_Bondeo')->nullable();
            $table->string('LIE_tiempoW_Bondeo')->nullable();
            $table->string('LIE_velocidadW_Bondeo')->nullable();
            $table->string('LIE_distanciaF_Bondeo')->nullable();
            $table->string('LIE_tiempoF_Bondeo')->nullable();
            $table->string('LIE_velocidadF_Bondeo')->nullable();
            $table->string('LIE_apariencia_Bondeo')->nullable();
            $table->string('LIE_tono_Bondeo')->nullable();
            $table->string('LIE_recuperacion_Bondeo')->nullable();
            $table->string('LIE_lecColordL_Bondeo')->nullable();
            $table->string('LIE_lecColorda_Bondeo')->nullable();
            $table->string('LIE_lecColordb_Bondeo')->nullable();

            $table->integer('id_Clien')->unsigned();
            $table->foreign('id_Clien')->references('id_Clien')->on('Clientes');

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
        Schema::dropIfExists('telasbondeos');
    }
}
