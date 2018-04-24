<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDglavadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dglavados', function (Blueprint $table) {
            $table->increments('id_DGL');
            $table->date('fechaE_DGL')->nullable(); 
            $table->time('horaE_DGL')->nullable();
            $table->string('Npieza_DGL');
            $table->string('color_DGL');
            $table->string('loteProd_DGL')->nullable();
            $table->string('equipo_DGL')->nullable();
            $table->string('batch_DGL')->nullable();
            $table->string('loteUrdido_DGL')->nullable();
            $table->string('folioBond_DGL')->nullable();
            $table->string('codProdTermin_DGL')->nullable();
            $table->string('nombreOpera_DGL')->nullable();
            $table->string('comentarios_DGL')->nullable();

            $table->integer('id_Lav')->unsigned();
            $table->foreign('id_Lav')->references('id_Lav')->on('telaslavados');

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
        Schema::dropIfExists('dglavados');
    }
}
