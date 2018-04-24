<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesotermofijado extends Model
{
    protected $table = 'procesotermofijados';

	protected $primaryKey = 'id_PTermo';


	protected $fillable = ['pOrilla_PTermo',
						   'pCentro_PTermo',
						   'ppOrilla_PTermo',
						   'pPromedio_PTermo',
						   'anchoU_PTermo',
						   'elongacionW_PTermo',
						   'elongacionF_PTermo',
						   'espesor_PTermo',
						   'lecColorDL_PTermo',
						   'lecColorDA_PTermo',
						   'lecColorDB_PTermo',
						   'distanciaW_PTermo',
						   'tiempoW_PTermo',
						   'velocidadW_PTermo',
						   'distanciaF_PTermo',
						   'tiempoF_PTermo',
						   'velocidadF_PTermo',
						   'apariencia_PTermo',
						   'tono_PTermo',
						   'disposicion_Ptermo',
						   'fechaE_PTermo',
						   'horaE_PTermo',
						   'analista_PTermo',
						   'comentario_PTermo',
						   'id_Procesos',
						   ];


//---------------------------Uno a Uno-----------------------------------



      public function procesos()
    {
        return $this->belongsTo('App\procesos');
    }


    //--------------------------------------------
    public function reprocesotermofijados()
    {
        return $this->hasMany('App\reprocesotermofijados');
    }
}
