<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgpunzonado extends Model
{
    protected $table = 'dgpunzonados';

	protected $primaryKey = 'id_DGP';


	protected $fillable = ['fechaE_DGP',
						   'horaE_DGLP',
						   'Npieza_DGP',
						   'color_DGP',
						   'loteProd_DGP',
						   'equipo_DGP',
						   'batch_DGP',
						   'loteUrdido_DGP',
						   'folioBond_DGP',
						   'codProdTermin_DGP',
						   'nombreOpera_DGP',
						   'comentarios_DGP',
						   'id_Punzo'
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telaspunzonado()
    {
        return $this->belongsTo('App\telaspunzonado');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->belongsToMany('App\procesos');
    }
}
