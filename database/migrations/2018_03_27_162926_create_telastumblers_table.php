<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelastumblersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telastumblers', function (Blueprint $table) {
            $table->increments('id_Tum');
            $table->string('Diseño_Tum');
            $table->string('color_Tum');
            $table->string('OEM_Tum');
 
            $table->string('MP_peso_Tum')->nullable();
            $table->string('MP_anchoU_Tum')->nullable();
            $table->string('MP_elongacionFW_Tum')->nullable();
            $table->string('MP_apari_Tum')->nullable();
            $table->string('MP_tono_Tum')->nullable();

            $table->string('UM_peso_Tum')->nullable();
            $table->string('UM_anchoU_Tum')->nullable();
            $table->string('UM_elongacionFW_Tum')->nullable();
            $table->string('UM_apari_Tum')->nullable();
            $table->string('UM_tono_Tum')->nullable();

            $table->string('LSE_peso_Tum')->nullable();
            $table->string('LSE_anchoU_Tum')->nullable();
            $table->string('LSE_elongacionW_Tum')->nullable();
            $table->string('LSE_elongacionF_Tum')->nullable();
            $table->string('LSE_apari_Tum')->nullable();
            $table->string('LSE_tono_Tum')->nullable();

            $table->string('LIE_peso_Tum')->nullable();
            $table->string('LIE_anchoU_Tum')->nullable();
            $table->string('LIE_elongacionW_Tum')->nullable();
            $table->string('LIE_elongacionF_Tum')->nullable();
            $table->string('LIE_apari_Tum')->nullable();
            $table->string('LIE_tono_Tum')->nullable();

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
        Schema::dropIfExists('telastumblers');
    }
}
