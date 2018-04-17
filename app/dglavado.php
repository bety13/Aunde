<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dglavado extends Model
{
    

    protected $table = 'dglavados';

	protected $primaryKey = 'id_DGL';


	protected $fillable = ['fechaE_DGL',
						   'horaE_DGL',
						   'Npieza_DGL',
						   'color_DGL',
						   'loteProd_DGL',
						   'equipo_DGL',
						   'batch_DGL',
						   'loteUrdido_DGL',
						   'folioBond_DGL',
						   'codProdTermin_DGL',
						   'nombreOpera_DGL',
						   'comentarios_DGL',
						   'id_Lav',
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telaslavados()
    {
        return $this->belongsTo('App\telaslavados');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->hasMany('App\procesos');
    }
}
