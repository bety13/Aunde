<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesolavado extends Model
{
    protected $table = 'reprocesolavados';

	protected $primaryKey = 'id_ReLav';


	protected $fillable = ['pOrilla_ReLav',
						   'pCentro_ReLav',
						   'ppOrilla_ReLav',
						   'pPromedio_ReLav',
						   'anchoU_ReLav',
						   'apariencia_ReLav',
						   'disposicion_ReLav',
						   'fechaE_ReLav',
						   'horaE_ReLav',
						   'analista_ReLav',
						   'comentario_ReLav',
						   'id_PLav',
						   ];




//---------------------------Uno a Uno-----------------------------------



    public function procesolavados()
    {
        return $this->belongsTo('App\procesolavados');
    }
}
