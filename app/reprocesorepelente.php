<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesorepelente extends Model
{
    protected $table = 'reprocesorepelentes';

	protected $primaryKey = 'id_ReRep';


	protected $fillable = ['pOrilla_ReRep',
						   'pCentro_ReRep',
						   'ppOrilla_ReRep',
						   'pPromedio_ReRep',
						   'anchoU_ReRep',
						   'elongacionW_ReRep',
						   'elongacionF_ReRep',
						   'repelente_ReRep',
						   'velcro_ReRep',
						   'croking_ReRep',
						   'distanciaW_ReRep',
						   'tiempoW_ReRep',
						   'velocidadW_ReRep',
						   'distanciaF_ReRep',
						   'tiempoF_ReRep',
						   'velocidadF_ReRep',
						   'apariencia_ReRep',
						   'tono_ReRep',
						   'disposicion_ReRep',
						   'fechaE_ReRep',
						   'horaE_ReRep',
						   'analista_ReRep',
						   'comentario_ReRep',
						   'id_PRep',
						   ];


//---------------------------Uno a Uno-----------------------------------



     public function procesorepelentes()
    {
        return $this->belongsTo('App\procesorepelentes');
    }
}
