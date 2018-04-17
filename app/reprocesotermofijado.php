<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesotermofijado extends Model
{
    protected $table = 'reprocesotermofijados';

	protected $primaryKey = 'id_PTermo';


	protected $fillable = ['pOrilla_ReTermo',
						   'pCentro_ReTermo',
						   'ppOrilla_ReTermo',
						   'pPromedio_ReTermo',
						   'anchoU_ReTermo',
						   'elongacionW_ReTermo',
						   'elongacionF_ReTermo',
						   'espesor_ReTermo',
						   'lecColorDL_ReTermo',
						   'lecColorDA_ReTermo',
						   'lecColorDB_ReTermo',
						   'distanciaW_ReTermo',
						   'tiempoW_ReTermo',
						   'velocidadW_ReTermo',
						   'distanciaF_ReTermo',
						   'tiempoF_ReTermo',
						   'velocidadF_ReTermo',
						   'apariencia_ReTermo',
						   'tono_ReTermo',
						   'disposicion_ReTermo',
						   'fechaE_ReTermo',
						   'horaE_ReTermo',
						   'analista_ReTermo',
						   'comentario_ReTermo',
						   'id_PTermo',
						   ];


//---------------------------Uno a Uno-----------------------------------

public function procesotermofijados()
    {
        return $this->belongsTo('App\procesotermofijados');
    }

    
}
