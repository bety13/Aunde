<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgtejido extends Model
{
    
	protected $table = 'dgtejidos';

	protected $primaryKey = 'id_DG';


	protected $fillable = ['fechaE_DG',
						   'horaE_DG',
						   'Npieza_DG',
						   'color_DG',
						   'loteProd_DG',
						   'equipo_DG',
						   'batch_DG',
						   'loteUrdido_DG',
						   'folioBond_DG',
						   'codProdTermin_DG',
						   'nombreOpera_DG',
						   'comentarios_DG',
						   'id_Tej',
						   ];
	protected $dates = [
		'publicado',
	];


    //---------------------------Uno a Uno-----------------------------------

    public function telastejidos()
    {
        return $this->belongsTo('App\telastejidos');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->belongsToMany('App\procesos');
    }
}
