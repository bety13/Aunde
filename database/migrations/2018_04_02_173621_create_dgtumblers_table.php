<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgtumblersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgtumblers', function (Blueprint $table) {
            $table->increments('id_DGT');
            $table->date('fechaE_DGT')->nullable(); 
            $table->time('horaE_DGT')->nullable();
            $table->string('Npieza_DGT');
            $table->string('color_DGT');
            $table->string('loteProd_DGT')->nullable();
            $table->string('equipo_DGT')->nullable();
            $table->string('batch_DGT')->nullable();
            $table->string('loteUrdido_DGT')->nullable();
            $table->string('folioBond_DGT')->nullable();
            $table->string('codProdTermin_DGT')->nullable();
            $table->string('nombreOpera_DGT')->nullable();
            $table->string('comentarios_DGT')->nullable();

            $table->integer('id_Tum')->unsigned();
            $table->foreign('id_Tum')->references('id_Tum')->on('telastumblers');

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
        Schema::dropIfExists('dgtumblers');
    }
}
 