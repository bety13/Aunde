<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgrepelentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgrepelentes', function (Blueprint $table) {
            $table->increments('id_DGR');
            $table->date('fechaE_DGR')->nullable(); 
            $table->time('horaE_DGR')->nullable();
            $table->string('Npieza_DGR');
            $table->string('color_DGR');
            $table->string('loteProd_DGR')->nullable();
            $table->string('equipo_DGR')->nullable();
            $table->string('batch_DGR')->nullable();
            $table->string('loteUrdido_DGR')->nullable();
            $table->string('folioBond_DGR')->nullable();
            $table->string('codProdTermin_DGR')->nullable();
            $table->string('nombreOpera_DGR')->nullable();
            $table->string('comentarios_DGR')->nullable();

            $table->integer('id_Rep')->unsigned();
            $table->foreign('id_Rep')->references('id_Rep')->on('telasrepelentes');

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
        Schema::dropIfExists('dgrepelentes');
    }
}
