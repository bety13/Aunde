<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesobondeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesobondeos', function (Blueprint $table) {
            $table->increments('id_PBondeo');
             $table->string('peso1_PBondeo')->nullable();
             $table->string('peso2_PBondeo')->nullable();
             $table->string('peso3_PBondeo')->nullable();
             $table->string('pesoProm_PBondeo')->nullable();
             $table->string('espesor1_PBondeo')->nullable();
             $table->string('espesor2_PBondeo')->nullable();
             $table->string('espesor3_PBondeo')->nullable();
             $table->string('espesorProm_PBondeo')->nullable();
             $table->string('anchoUtil_PBondeo')->nullable();
             $table->string('adhesionWTU_PBondeo')->nullable();
             $table->string('adhesionFTU_PBondeo')->nullable();
             $table->string('adhesionWUS_PBondeo')->nullable();
             $table->string('adhesionFUS_PBondeo')->nullable();
             $table->string('elongacionW_PBondeo')->nullable();
             $table->string('elongacionF_PBondeo')->nullable();
             $table->string('distanciaW_PBondeo')->nullable();
             $table->string('tiempoW_PBondeo')->nullable();
             $table->string('velocidadW_PBondeo')->nullable();
             $table->string('distanciaF_PBondeo')->nullable();
             $table->string('tiempoF_PBondeo')->nullable();
             $table->string('velocidadF_PBondeo')->nullable();
             $table->string('apariencia_PBondeo')->nullable();
             $table->string('tono_PBondeo')->nullable();
             $table->string('recuperacionW_PBondeo')->nullable();
             $table->string('recuperacionF_PBondeo')->nullable();
             $table->string('lecColorDL_PBondeo')->nullable();
             $table->string('lecColorDA_PBondeo')->nullable();
             $table->string('lecColorDB_PBondeo')->nullable();
             $table->enum('disposicion_PBondeo', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
             $table->string('fechaE_PBondeo')->nullable();
             $table->string('horaE_PBondeo')->nullable();
             $table->string('analista_PBondeo');
             $table->string('comentario_PBondeo')->nullable();
             $table->timestamps();

             $table->integer('id_Procesos')->unsigned()->nullable();
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
        Schema::dropIfExists('procesobondeos');
    }
}
