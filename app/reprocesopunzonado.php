<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reprocesopunzonado extends Model
{
    protected $table = 'reprocesopunzonados';

	protected $primaryKey = 'id_RePunzo';


	protected $fillable = ['pOrilla_RePunzo',
						   'pCentro_RePunzo',
						   'ppOrilla_RePunzo',
						   'pPromedio_RePunzo',
						   'anchoU_RePunzo',
						   'apariencia_RePunzo',
						   'disposicion_RePunzo',
						   'fechaE_RePunzo',
						   'horaE_RePunzo',
						   'analista_RePunzo',
						   'comentario_RePunzo',
						   'id_PPunzo',
						   ];




//---------------------------Uno a Uno-----------------------------------

 public function procesopunzonados()
    {
        return $this->belongsTo('App\procesopunzonados');
    }
}
