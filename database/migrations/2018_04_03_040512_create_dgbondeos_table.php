<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgbondeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgbondeos', function (Blueprint $table) {
            $table->increments('id_DGBO');
            $table->date('fechaE_DGBO')->nullable(); 
            $table->time('horaE_DGBO')->nullable();
            $table->string('Npieza_DGBO');
            $table->string('color_DGBO');
            $table->string('loteProd_DGBO')->nullable();
            $table->string('equipo_DGBO')->nullable();
            $table->string('batch_DGBO')->nullable();
            $table->string('loteUrdido_DGBO')->nullable();
            $table->string('folioBond_DGBO')->nullable();
            $table->string('codProdTermin_DGBO')->nullable();
            $table->string('nombreOpera_DGBO')->nullable();
            $table->string('comentarios_DGBO')->nullable();

            $table->integer('id_Bondeo')->unsigned();
            $table->foreign('id_Bondeo')->references('id_Bondeo')->on('telasbondeos');

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
        Schema::dropIfExists('dgbondeos');
    }
}
