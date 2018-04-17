<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
                $table->increments('id_Procesos');
                $table->enum('tipo_Procesos', ['Tejido', 'Ramas','Bondeo']); 

                $table->integer('id_DG')->unsigned();
                $table->foreign('id_DG')->references('id_DG')->on('dgtejidos');

                $table->integer('id_DGL')->unsigned();
                $table->foreign('id_DGL')->references('id_DGL')->on('dglavados');

                $table->integer('id_DGT')->unsigned();
                $table->foreign('id_DGT')->references('id_DGT')->on('dgtumblers');

                $table->integer('id_DGR')->unsigned();
                $table->foreign('id_DGR')->references('id_DGR')->on('dgrepelentes');

                $table->integer('id_DGB')->unsigned();
                $table->foreign('id_DGB')->references('id_DGB')->on('dgbackings');

                $table->integer('id_DGTE')->unsigned();
                $table->foreign('id_DGTE')->references('id_DGTE')->on('dgtermofijados');

                $table->integer('id_DGP')->unsigned();
                $table->foreign('id_DGP')->references('id_DGP')->on('dgpunzonados');

                $table->integer('id_DGBO')->unsigned();
                $table->foreign('id_DGBO')->references('id_DGBO')->on('dgbondeos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procesos');
    }
}
