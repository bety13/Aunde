<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesobondeo extends Model
{
    protected $table = 'reprocesobondeos';

	protected $primaryKey = 'id_ReBondeo';


	protected $fillable = ['peso1_ReBondeo',
						   'peso2_ReBondeo',
						   'peso3_ReBondeo',
						   'pesoProm_ReBondeo',
						   'espesor1_ReBondeo',
						   'espesor2_ReBondeo',
						   'espesor3_ReBondeo',
						   'espesorProm_ReBondeo',
						   'anchoUtil_ReBondeo',
						   'adhesionWTU_ReBondeo',
						   'adhesionFTU_ReBondeo',
						   'adhesionWUS_ReBondeo',
						   'adhesionFUS_ReBondeo',
						   'elongacionW_ReBondeo',
						   'elongacionF_ReBondeo',
						   'distanciaW_ReBondeo',
						   'tiempoW_ReBondeo',
						   'velocidadW_ReBondeo',
						   'distanciaF_ReBondeo',
						   'tiempoF_ReBondeo',
						   'velocidadF_ReBondeo',
						   'apariencia_ReBondeo',
						   'tono_ReBondeo',
						   'recuperacionW_ReBondeo',
						   'recuperacionF_ReBondeo',
						   'lecColorDL_ReBondeo',
						   'lecColorDA_ReBondeo',
						   'lecColorDB_ReBondeo',
						   'disposicion_ReBondeo',
						   'fechaE_ReBondeo',
						   'horaE_ReBondeo',
						   'analista_ReBondeo',
						   'comentario_ReBondeo',
						   'id_PBondeo',
						   ];


//------------------------

public function procesobondeos()
    {
        return $this->belongsTo('App\procesobondeos');
    }

}
