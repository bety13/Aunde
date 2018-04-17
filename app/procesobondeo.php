<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesobondeo extends Model
{
    protected $table = 'procesobondeos';

	protected $primaryKey = 'id_PBondeo';


	protected $fillable = ['peso1_PBondeo',
						   'peso2_PBondeo',
						   'peso3_PBondeo',
						   'pesoProm_PBondeo',
						   'espesor1_PBondeo',
						   'espesor2_PBondeo',
						   'espesor3_PBondeo',
						   'espesorProm_PBondeo',
						   'anchoUtil_PBondeo',
						   'adhesionWTU_PBondeo',
						   'adhesionFTU_PBondeo',
						   'adhesionWUS_PBondeo',
						   'adhesionFUS_PBondeo',
						   'elongacionW_PBondeo',
						   'elongacionF_PBondeo',
						   'distanciaW_PBondeo',
						   'tiempoW_PBondeo',
						   'velocidadW_PBondeo',
						   'distanciaF_PBondeo',
						   'tiempoF_PBondeo',
						   'velocidadF_PBondeo',
						   'apariencia_PBondeo',
						   'tono_PBondeo',
						   'recuperacionW_PBondeo',
						   'recuperacionF_PBondeo',
						   'lecColorDL_PBondeo',
						   'lecColorDA_PBondeo',
						   'lecColorDB_PBondeo',
						   'disposicion_PBondeo',
						   'fechaE_PBondeo',
						   'horaE_PBondeo',
						   'analista_PBondeo',
						   'comentario_PBondeo',
						   'id_Procesos',
						   ];


//---------------------------Uno a Uno-----------------------------------



    public function procesos()
    {
        return $this->belongsTo('App\procesos');
    }

    //---------------------------------------------------
    public function reprocesobondeos()
    {
        return $this->hasMany('App\reprocesobondeos');
    }
}
