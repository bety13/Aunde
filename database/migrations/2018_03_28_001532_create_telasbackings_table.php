<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelasbackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telasbackings', function (Blueprint $table) {
            $table->increments('id_Back');
            $table->string('Diseño_Back');
            $table->string('color_Back');
            $table->string('OEM_Back');

            $table->string('MP_peso_Back')->nullable();
            $table->string('MP_anchoU_Back')->nullable();
            $table->string('MP_elongacionFW_Back')->nullable();
            $table->string('MP_rep_Back')->nullable();
            $table->string('MP_velcro_Back')->nullable();
            $table->string('MP_croking_Back')->nullable();
            $table->string('MP_flamabilidadWF_Back')->nullable();
            $table->string('MP_apari_Back')->nullable();
            $table->string('MP_tono_Back')->nullable();

            $table->string('UM_peso_Back')->nullable();
            $table->string('UM_anchoU_Back')->nullable();
            $table->string('UM_elongacionFW_Back')->nullable();
            $table->string('UM_rep_Back')->nullable();
            $table->string('UM_velcro_Back')->nullable();
            $table->string('UM_croking_Back')->nullable();
            $table->string('UM_distanciaW_Back')->nullable();
            $table->string('UM_tiempoW_Back')->nullable();
            $table->string('UM_velocidadW_Back')->nullable();
            $table->string('UM_distanciaF_Back')->nullable();
            $table->string('UM_tiempoF_Back')->nullable();
            $table->string('UM_velocidadF_Back')->nullable();
            $table->string('UM_apari_Back')->nullable();
            $table->string('UM_tono_Back')->nullable();

            $table->string('LSE_peso_Back')->nullable();
            $table->string('LSE_anchoU_Back')->nullable();
            $table->string('LSE_elongacionW_Back')->nullable();
            $table->string('LSE_elongacionF_Back')->nullable();
            $table->string('LSE_rep_Back')->nullable();
            $table->string('LSE_velcro_Back')->nullable();
            $table->string('LSE_croking_Back')->nullable();
            $table->string('LSE_distanciaW_Back')->nullable();
            $table->string('LSE_tiempoW_Back')->nullable();
            $table->string('LSE_velocidadW_Back')->nullable();
            $table->string('LSE_distanciaF_Back')->nullable();
            $table->string('LSE_tiempoF_Back')->nullable();
            $table->string('LSE_velocidadF_Back')->nullable();
            $table->string('LSE_apari_Back')->nullable();
            $table->string('LSE_tono_Back')->nullable();

            $table->string('LIE_peso_Back')->nullable();
            $table->string('LIE_anchoU_Back')->nullable();
            $table->string('LIE_elongacionW_Back')->nullable();
            $table->string('LIE_elongacionF_Back')->nullable();
            $table->string('LIE_rep_Back')->nullable();
            $table->string('LIE_velcro_Back')->nullable();
            $table->string('LIE_croking_Back')->nullable();
            $table->string('LIE_distanciaW_Back')->nullable();
            $table->string('LIE_tiempoW_Back')->nullable();
            $table->string('LIE_velocidadW_Back')->nullable();
            $table->string('LIE_distanciaF_Back')->nullable();
            $table->string('LIE_tiempoF_Back')->nullable();
            $table->string('LIE_velocidadF_Back')->nullable();
            $table->string('LIE_apari_Back')->nullable();
            $table->string('LIE_tono_Back')->nullable();

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
        Schema::dropIfExists('telasbackings');
    }
}
