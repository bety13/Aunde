<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgbondeo extends Model
{
    protected $table = 'dgbondeos';

	protected $primaryKey = 'id_DGBO';


	protected $fillable = ['fechaE_DGBO',
						   'horaE_DGLBO',
						   'Npieza_DGBO',
						   'color_DGBO',
						   'loteProd_DGBO',
						   'equipo_DGBO',
						   'batch_DGBO',
						   'loteUrdido_DGBO',
						   'folioBond_DGBO',
						   'codProdTermin_DGBO',
						   'nombreOpera_DGBO',
						   'comentarios_DGBO',
						   'id_Bondeo'
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telasbondeos()
    {
        return $this->belongsTo('App\telasbondeos');
    }

    public function procesos()
    {
        return $this->belongsToMany('App\procesos');
    }
}
