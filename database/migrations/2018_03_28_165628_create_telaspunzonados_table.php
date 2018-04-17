<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelaspunzonadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telaspunzonados', function (Blueprint $table) {
            $table->increments('id_Punzo');
            $table->string('Diseño_Punzo');
            $table->string('color_Punzo');
            $table->string('OEM_Punzo');

            $table->string('MP_peso_Punzo')->nullable();
            $table->string('MP_anchoU_Punzo')->nullable();
            $table->string('MP_apari_Punzo')->nullable();

            $table->string('UM_peso_Punzo')->nullable();
            $table->string('UM_anchoU_Punzo')->nullable();
            $table->string('UM_apari_Punzo')->nullable();

            $table->string('LSE_peso_Punzo')->nullable();
            $table->string('LSE_anchoU_Punzo')->nullable();
            $table->string('LSE_apari_Punzo')->nullable();
            
            $table->string('LIE_peso_Punzo')->nullable();
            $table->string('LIE_anchoU_Punzo')->nullable();
            $table->string('LIE_apari_Punzo')->nullable();

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
        Schema::dropIfExists('telaspunzonados');
    }
}
