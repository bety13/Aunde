<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesopunzonado extends Model
{
    protected $table = 'procesopunzonados';

	protected $primaryKey = 'id_PPunzo';


	protected $fillable = ['pOrilla_PPunzo',
						   'pCentro_PPunzo',
						   'ppOrilla_PPunzo',
						   'pPromedio_PPunzo',
						   'anchoU_PPunzo',
						   'apariencia_PPunzo',
						   'disposicion_PPunzo',
						   'fechaE_PPunzo',
						   'horaE_PPunzo',
						   'analista_PPunzo',
						   'comentario_PPunzo',
						   'id_Ramas',
						   ];




//---------------------------Uno a Uno-----------------------------------



    public function procesoramas()
    {
        return $this->belongsTo('App\procesoramas');
    }

     //--------------------------------------------
    public function reprocesopunzonados()
    {
        return $this->hasMany('App\reprocesopunzonados');
    }
}
