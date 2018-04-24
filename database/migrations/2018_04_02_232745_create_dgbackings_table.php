<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgbackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgbackings', function (Blueprint $table) {
            $table->increments('id_DGB');
            $table->date('fechaE_DGB')->nullable(); 
            $table->time('horaE_DGB')->nullable();
            $table->string('Npieza_DGB');
            $table->string('color_DGB');
            $table->string('loteProd_DGB')->nullable();
            $table->string('equipo_DGB')->nullable();
            $table->string('batch_DGB')->nullable();
            $table->string('loteUrdido_DGB')->nullable();
            $table->string('folioBond_DGB')->nullable();
            $table->string('codProdTermin_DGB')->nullable();
            $table->string('nombreOpera_DGB')->nullable();
            $table->string('comentarios_DGB')->nullable();

            $table->integer('id_Back')->unsigned();
            $table->foreign('id_Back')->references('id_Back')->on('telasbackings');

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
        Schema::dropIfExists('dgbackings');
    }
}
