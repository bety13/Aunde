<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesotumbler extends Model
{
    protected $table = 'procesotumblers';

	protected $primaryKey = 'id_PTum';


	protected $fillable = ['pOrilla_PTum',
						   'pCentro_PTum',
						   'ppOrilla_PTum',
						   'pPromedio_PTum',
						   'anchoU_PTum',
						   'eloncacionW_PTum',
						   'eloncacionF_PTum',
						   'apariencia_PTum',
						   'tono_PTum',
						   'disposicion_Ptum',
						   'fechaE_PTum',
						   'horaE_PTum',
						   'analista_PTum',
						   'comentario_PTum',
						   'id_Procesos',
						   ];




//---------------------------Uno a Uno-----------------------------------

	  public function procesos()
    {
        return $this->belongsTo('App\procesos');
    }


    //-----------------------------------------------

    public function reprocesotumblers()
    {
        return $this->hasMany('App\reprocesotumblers');
    }
}