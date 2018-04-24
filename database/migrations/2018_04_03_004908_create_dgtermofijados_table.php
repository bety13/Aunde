<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgtermofijadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgtermofijados', function (Blueprint $table) {
            $table->increments('id_DGTE');
            $table->date('fechaE_DGTE')->nullable(); 
            $table->time('horaE_DGTE')->nullable();
            $table->string('Npieza_DGTE');
            $table->string('color_DGTE');
            $table->string('loteProd_DGTE')->nullable();
            $table->string('equipo_DGTE')->nullable();
            $table->string('batch_DGTE')->nullable();
            $table->string('loteUrdido_DGTE')->nullable();
            $table->string('folioBond_DGTE')->nullable();
            $table->string('codProdTermin_DGTE')->nullable();
            $table->string('nombreOpera_DGTE')->nullable();
            $table->string('comentarios_DGTE')->nullable();

            $table->integer('id_Termo')->unsigned();
            $table->foreign('id_Termo')->references('id_Termo')->on('telastermofijados');

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
        Schema::dropIfExists('dgtermofijados');
    }
}
