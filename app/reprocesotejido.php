<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesotejido extends Model
{
     protected $table = 'reprocesotejidos';

	protected $primaryKey = 'id_ReTej';


	protected $fillable = ['pOrilla_ReTej',
						   'pCentro_ReTej',
						   'ppOrilla_ReTej',
						   'pPromedio_ReTej',
						   'anchoU_ReTej',
						   'apariencia_ReTej',
						   'disposicion_ReTej',
						   'fechaE_ReTej',
						   'horaE_ReTej',
						   'analista_ReTej',
						   'comentario_ReTej',
						   'id_PTej',
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function procesotejidos()
    {
        return $this->belongsTo('App\procesotejidos');
    }
}
