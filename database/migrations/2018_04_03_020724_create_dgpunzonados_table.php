<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgpunzonadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgpunzonados', function (Blueprint $table) {
            $table->increments('id_DGP');
            $table->date('fechaE_DGP')->nullable(); 
            $table->time('horaE_DGP')->nullable();
            $table->string('Npieza_DGP');
            $table->string('color_DGP');
            $table->string('loteProd_DGP')->nullable();
            $table->string('equipo_DGP')->nullable();
            $table->string('batch_DGP')->nullable();
            $table->string('loteUrdido_DGP')->nullable();
            $table->string('folioBond_DGP')->nullable();
            $table->string('codProdTermin_DGP')->nullable();
            $table->string('nombreOpera_DGP')->nullable();
            $table->string('comentarios_DGP')->nullable();

            $table->integer('id_Punzo')->unsigned();
            $table->foreign('id_Punzo')->references('id_Punzo')->on('telaspunzonados');

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
        Schema::dropIfExists('dgpunzonados');
    }
}
