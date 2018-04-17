<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelaslavadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telaslavados', function (Blueprint $table) {
            $table->increments('id_Lav');
            $table->string('Diseño_Lav');
            $table->string('color_Lav');
            $table->string('OEM_Lav');
            $table->string('MP_peso_Lav')->nullable();
            $table->string('MP_anchoU_Lav')->nullable();
            $table->string('MP_apari_Lav')->nullable();

            $table->string('UM_peso_Lav')->nullable();
            $table->string('UM_anchoU_Lav')->nullable();
            $table->string('UM_apari_Lav')->nullable();

            $table->string('LSE_peso_Lav')->nullable();
            $table->string('LSE_anchoU_Lav')->nullable();
            $table->string('LSE_apari_Lav')->nullable();
            
            $table->string('LIE_peso_Lav')->nullable();
            $table->string('LIE_anchoU_Lav')->nullable();
            $table->string('LIE_apari_Lav')->nullable();

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
        Schema::dropIfExists('telaslavados');
    }
}
