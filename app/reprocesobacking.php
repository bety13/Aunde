<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesobacking extends Model
{
    protected $table = 'reprocesobackings';

	protected $primaryKey = 'id_ReBack';


	protected $fillable = ['pOrilla_ReBack',
						   'pCentro_ReBack',
						   'ppOrilla_ReBack',
						   'pPromedio_ReBack',
						   'anchoU_ReBack',
						   'elongacionW_ReBack',
						   'elongacionF_ReBack',
						   'repelente_ReBack',
						   'velcro_ReBack',
						   'croking_ReBack',
						   'distanciaW_ReBack',
						   'tiempoW_ReBack',
						   'velocidadW_ReBack',
						   'distanciaF_ReBack',
						   'tiempoF_ReBack',
						   'velocidadF_ReBack',
						   'apariencia_ReBack',
						   'tono_ReBack',
						   'disposicion_ReBack',
						   'fechaE_ReBack',
						   'horaE_ReBack',
						   'analista_ReBack',
						   'comentario_ReBack',
						   'id_PBack',
						   ];




	public function procesobackings()
    {
        return $this->belongsTo('App\procesobackings');
    }

}
