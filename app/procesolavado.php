<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesolavado extends Model
{

	protected $table = 'procesolavados';

	protected $primaryKey = 'id_PLav';


	protected $fillable = ['pOrilla_PLav',
						   'pCentro_PLav',
						   'ppOrilla_PLav',
						   'promedio_PLav',
						   'anchoU_PLav',
						   'apariencia_PLav',
						   'disposicion_PLav',
						   'fechaE_PLav',
						   'horaE_PLav',
						   'analista_PLav',
						   'comentario_PLav',
						   'id_Ramas',
						   ];




//---------------------------Uno a Uno-----------------------------------



    public function procesoramas()
    {
        return $this->belongsTo('App\procesoramas');
    }



    public function reprocesolavados()
    {
        return $this->hasMany('App\reprocesolavados');
    }
}
