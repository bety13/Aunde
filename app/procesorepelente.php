<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesorepelente extends Model
{
    protected $table = 'procesorepelentes';

	protected $primaryKey = 'id_PRep';


	protected $fillable = ['pOrilla_PRep',
						   'pCentro_PRep',
						   'ppOrilla_PRep',
						   'pPromedio_PRep',
						   'anchoU_PRep',
						   'elongacionW_PRep',
						   'elongacionF_PRep',
						   'repelente_PRep',
						   'velcro_PRep',
						   'croking_PRep',
						   'distanciaW_PRep',
						   'tiempoW_PRep',
						   'velocidadW_PRep',
						   'distanciaF_PRep',
						   'tiempoF_PRep',
						   'velocidadF_PRep',
						   'apariencia_PRep',
						   'tono_PRep',
						   'disposicion_PRep',
						   'fechaE_PRep',
						   'horaE_PRep',
						   'analista_PRep',
						   'comentario_PRep',
						   'id_Ramas',
						   ];


//---------------------------Uno a Uno-----------------------------------



    public function procesoramas()
    {
        return $this->belongsTo('App\procesoramas');
    }

 //--------------------------------------------
    public function reprocesorepelentes()
    {
        return $this->hasMany('App\reprocesorepelentes');
    }
}
