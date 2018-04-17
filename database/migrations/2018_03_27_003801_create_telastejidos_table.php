<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelastejidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telastejidos', function (Blueprint $table) {
            $table->increments('id_Tej');
            $table->string('Diseño_Tej');
            $table->string('color_Tej');
            $table->string('OEM_Tej');
            $table->string('MP_peso_Tej')->nullable();
            $table->string('MP_anchoU_Tej')->nullable();
            $table->string('MP_apari_Tej')->nullable();
            $table->string('UM_peso_Tej')->nullable();
            $table->string('UM_anchoU_Tej')->nullable();
            $table->string('UM_apari_Tej')->nullable();
            $table->string('LSE_peso_Tej')->nullable();
            $table->string('LSE_anchoU_Tej')->nullable();
            $table->string('LSE_apari_Tej')->nullable();
            $table->string('LIE_peso_Tej')->nullable();
            $table->string('LIE_anchoU_Tej')->nullable();
            $table->string('LIE_apari_Tej')->nullable();

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
        Schema::dropIfExists('telastejidos');
    }
}
