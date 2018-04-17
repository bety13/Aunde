<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgbacking extends Model
{
    protected $table = 'dgbackings';

	protected $primaryKey = 'id_DGB';


	protected $fillable = ['fechaE_DGB',
						   'horaE_DGLB',
						   'Npieza_DGB',
						   'color_DGB',
						   'loteProd_DGB',
						   'equipo_DGB',
						   'batch_DGB',
						   'loteUrdido_DGB',
						   'folioBond_DGB',
						   'codProdTermin_DGB',
						   'nombreOpera_DGB',
						   'comentarios_DGB',
						   'id_Back'
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telasbackings()
    {
        return $this->belongsTo('App\telasbackings');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->hasMany('App\procesos');
    }
}
