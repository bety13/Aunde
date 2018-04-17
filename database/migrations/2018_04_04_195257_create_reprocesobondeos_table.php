<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprocesobondeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprocesobondeos', function (Blueprint $table) {
             $table->increments('id_ReBondeo');
            $table->string('peso1_ReBondeo')->nullable();
             $table->string('peso2_ReBondeo')->nullable();
             $table->string('peso3_ReBondeo')->nullable();
             $table->string('pesoProm_ReBondeo')->nullable();
             $table->string('espesor1_ReBondeo')->nullable();
             $table->string('espesor2_ReBondeo')->nullable();
             $table->string('espesor3_ReBondeo')->nullable();
             $table->string('espesorProm_ReBondeo')->nullable();
             $table->string('anchoUtil_ReBondeo')->nullable();
             $table->string('adhesionWTU_ReBondeo')->nullable();
             $table->string('adhesionFTU_ReBondeo')->nullable();
             $table->string('adhesionWUS_ReBondeo')->nullable();
             $table->string('adhesionFUS_ReBondeo')->nullable();
             $table->string('elongacionW_ReBondeo')->nullable();
             $table->string('elongacionF_ReBondeo')->nullable();
             $table->string('distanciaW_ReBondeo')->nullable();
             $table->string('tiempoW_ReBondeo')->nullable();
             $table->string('velocidadW_ReBondeo')->nullable();
             $table->string('distanciaF_ReBondeo')->nullable();
             $table->string('tiempoF_ReBondeo')->nullable();
             $table->string('velocidadF_ReBondeo')->nullable();
             $table->string('apariencia_ReBondeo')->nullable();
             $table->string('tono_ReBondeo')->nullable();
             $table->string('recuperacionW_ReBondeo')->nullable();
             $table->string('recuperacionF_ReBondeo')->nullable();
             $table->string('lecColorDL_ReBondeo')->nullable();
             $table->string('lecColorDA_ReBondeo')->nullable();
             $table->string('lecColorDB_ReBondeo')->nullable();
             $table->enum('disposicion_ReBondeo', ['Liberado', 'Rechazado','Segunda calidad'])->nullable();
             $table->string('fechaE_ReBondeo')->nullable();
             $table->string('horaE_ReBondeo')->nullable();
             $table->string('analista_ReBondeo');
             $table->string('comentario_ReBondeo')->nullable();

            $table->integer('id_PBondeo')->unsigned();
            $table->foreign('id_PBondeo')->references('id_PBondeo')->on('procesobondeos');

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
        Schema::dropIfExists('reprocesobondeos');
    }
}
