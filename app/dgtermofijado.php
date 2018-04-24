<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgtermofijado extends Model
{
    protected $table = 'dgtermofijados';

	protected $primaryKey = 'id_DGTE';


	protected $fillable = ['fechaE_DGTE',
						   'horaE_DGLTE',
						   'Npieza_DGTE',
						   'color_DGTE',
						   'loteProd_DGTE',
						   'equipo_DGTE',
						   'batch_DGTE',
						   'loteUrdido_DGTE',
						   'folioBond_DGTE',
						   'codProdTermin_DGTE',
						   'nombreOpera_DGTE',
						   'comentarios_DGTE',
						   'id_Termo'
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telastermofijados()
    {
        return $this->belongsTo('App\telastermofijados');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->belongsToMany('App\procesos');
    }
}
