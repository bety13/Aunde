<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesotumbler extends Model
{
    protected $table = 'reprocesotumblers';

	protected $primaryKey = 'id_ReTum';


	protected $fillable = ['pOrilla_ReTum',
						   'pCentro_ReTum',
						   'ppOrilla_ReTum',
						   'pPromedio_ReTum',
						   'anchoU_ReTum',
						   'eloncacionW_ReTum',
						   'eloncacionF_ReTum',
						   'apariencia_ReTum',
						   'tono_ReTum',
						   'disposicion_ReTum',
						   'fechaE_ReTum',
						   'horaE_ReTum',
						   'analista_ReTum',
						   'comentario_ReTum',
						   'id_PTum',
						   ];




//---------------------------Uno a Uno-----------------------------------



    public function procesotumblers()
    {
        return $this->belongsTo('App\procesotumblers');
    }
}

