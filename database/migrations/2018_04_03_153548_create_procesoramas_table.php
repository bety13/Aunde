<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesoramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesoramas', function (Blueprint $table) {
            $table->increments('id_Ramas');
            $table->enum('tipo_Ramas', ['Lavado', 'Tumbler', 'Repelente', 'Backing', 'Termofijado', 'Punzonado']); 

            $table->integer('id_Procesos')->unsigned();
            $table->foreign('id_Procesos')->references('id_Procesos')->on('procesos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procesoramas');
    }
}
