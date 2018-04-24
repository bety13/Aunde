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
						   'id_Procesos',
						   ];




//---------------------------Uno a Uno-----------------------------------



      public function procesos()
    {
        return $this->belongsTo('App\procesos');
    }



    public function reprocesolavados()
    {
        return $this->hasMany('App\reprocesolavados');
    }
}
