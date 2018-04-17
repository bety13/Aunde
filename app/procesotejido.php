<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesotejido extends Model
{
    protected $table = 'procesotejidos';

	protected $primaryKey = 'id_PTej';


	protected $fillable = ['pOrilla_PTej',
						   'pCentro_PTej',
						   'ppOrilla_PTej',
						   'promedio_PTej',
						   'anchoU_PTej',
						   'apariencia_PTej',
						   'disposicion_PTej',
						   'fechaE_PTej',
						   'horaE_PTej',
						   'analista_PTej',
						   'comentario_PTej',
						   'id_Procesos',
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function procesos()
    {
        return $this->belongsTo('App\procesos');
    }

    //-----------------------------------------------------------------

     public function reprocesotejidos()
    {
        return $this->hasMany('App\reprocesotejidos');
    }
}
