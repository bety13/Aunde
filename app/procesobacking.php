<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesobacking extends Model
{
    protected $table = 'procesobackings';

	protected $primaryKey = 'id_PBack';


	protected $fillable = ['pOrilla_PBack',
						   'pCentro_PBack',
						   'ppOrilla_PBack',
						   'pPromedio_PBack',
						   'anchoU_PBack',
						   'elongacionW_PBack',
						   'elongacionF_PBack',
						   'repelente_PBack',
						   'velcro_PBack',
						   'croking_PBack',
						   'distanciaW_PBack',
						   'tiempoW_PBack',
						   'velocidadW_PBack',
						   'distanciaF_PBack',
						   'tiempoF_PBack',
						   'velocidadF_PBack',
						   'apariencia_PBack',
						   'tono_PBack',
						   'disposicion_PBack',
						   'fechaE_PBack',
						   'horaE_PBack',
						   'analista_PBack',
						   'comentario_PBack',
						   'id_Ramas',
						   ];


//---------------------------Uno a Uno-----------------------------------



    public function procesoramas()
    {
        return $this->belongsTo('App\procesoramas');
    }

 //--------------------------------------------
    public function reprocesobackings()
    {
        return $this->hasMany('App\reprocesobackings');
    }
}
