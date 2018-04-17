<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelasrepelentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telasrepelentes', function (Blueprint $table) {
            $table->increments('id_Rep');
            $table->string('Diseño_Rep');
            $table->string('color_Rep');
            $table->string('OEM_Rep');

            $table->string('MP_peso_Rep')->nullable();
            $table->string('MP_anchoU_Rep')->nullable();
            $table->string('MP_elongacionFW_Rep')->nullable();
            $table->string('MP_rep_Rep')->nullable();
            $table->string('MP_velcro_Rep')->nullable();
            $table->string('MP_croking_Rep')->nullable();
            $table->string('MP_flamabilidadWF_Rep')->nullable();
            $table->string('MP_apari_Rep')->nullable();
            $table->string('MP_tono_Rep')->nullable();


            $table->string('UM_peso_Rep')->nullable();
            $table->string('UM_anchoU_Rep')->nullable();
            $table->string('UM_elongacionFW_Rep')->nullable();
            $table->string('UM_rep_Rep')->nullable();
            $table->string('UM_velcro_Rep')->nullable();
            $table->string('UM_croking_Rep')->nullable();
            $table->string('UM_distanciaW_Rep')->nullable();
            $table->string('UM_tiempoW_Rep')->nullable();
            $table->string('UM_velocidadW_Rep')->nullable();
            $table->string('UM_distanciaF_Rep')->nullable();
            $table->string('UM_tiempoF_Rep')->nullable();
            $table->string('UM_velocidadF_Rep')->nullable();
            $table->string('UM_apari_Rep')->nullable();
            $table->string('UM_tono_Rep')->nullable();

            $table->string('LSE_peso_Rep')->nullable();
            $table->string('LSE_anchoU_Rep')->nullable();
            $table->string('LSE_elongacionW_Rep')->nullable();
            $table->string('LSE_elongacionF_Rep')->nullable();
            $table->string('LSE_rep_Rep')->nullable();
            $table->string('LSE_velcro_Rep')->nullable();
            $table->string('LSE_croking_Rep')->nullable();
            $table->string('LSE_distanciaW_Rep')->nullable();
            $table->string('LSE_tiempoW_Rep')->nullable();
            $table->string('LSE_velocidadW_Rep')->nullable();
            $table->string('LSE_distanciaF_Rep')->nullable();
            $table->string('LSE_tiempoF_Rep')->nullable();
            $table->string('LSE_velocidadF_Rep')->nullable();
            $table->string('LSE_apari_Rep')->nullable();
            $table->string('LSE_tono_Rep')->nullable();

            $table->string('LIE_peso_Rep')->nullable();
            $table->string('LIE_anchoU_Rep')->nullable();
            $table->string('LIE_elongacionW_Rep')->nullable();
            $table->string('LIE_elongacionF_Rep')->nullable();
            $table->string('LIE_rep_Rep')->nullable();
            $table->string('LIE_velcro_Rep')->nullable();
            $table->string('LIE_croking_Rep')->nullable();
            $table->string('LIE_distanciaW_Rep')->nullable();
            $table->string('LIE_tiempoW_Rep')->nullable();
            $table->string('LIE_velocidadW_Rep')->nullable();
            $table->string('LIE_distanciaF_Rep')->nullable();
            $table->string('LIE_tiempoF_Rep')->nullable();
            $table->string('LIE_velocidadF_Rep')->nullable();
            $table->string('LIE_apari_Rep')->nullable();
            $table->string('LIE_tono_Rep')->nullable();

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
        Schema::dropIfExists('telasrepelentes');
    }
}
