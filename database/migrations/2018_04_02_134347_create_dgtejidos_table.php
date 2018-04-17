<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgtejidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgtejidos', function (Blueprint $table) {
            $table->increments('id_DG');
            $table->date('fechaE_DG')->nullable(); 
            $table->time('horaE_DG')->nullable();
            $table->string('Npieza_DG');
            $table->string('color_DG');
            $table->string('loteProd_DG')->nullable();
            $table->string('equipo_DG')->nullable();
            $table->string('batch_DG')->nullable();
            $table->string('loteUrdido_DG')->nullable();
            $table->string('folioBond_DG')->nullable();
            $table->string('codProdTermin_DG')->nullable();
            $table->string('nombreOpera_DG')->nullable();
            $table->string('comentarios_DG')->nullable();

            $table->integer('id_Tej')->unsigned();
            $table->foreign('id_Tej')->references('id_Tej')->on('telastejidos');

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
        Schema::dropIfExists('dgtejidos');
    }
}
