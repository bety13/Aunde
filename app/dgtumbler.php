<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgtumbler extends Model
{
    protected $table = 'dgtumblers';

	protected $primaryKey = 'id_DGT';


	protected $fillable = ['fechaE_DGT',
						   'horaE_DGLT',
						   'Npieza_DGT',
						   'color_DGT',
						   'loteProd_DGT',
						   'equipo_DGT',
						   'batch_DGT',
						   'loteUrdido_DGT',
						   'folioBond_DGT',
						   'codProdTermin_DGT',
						   'nombreOpera_DGT',
						   'comentarios_DGT',
						   'id_Tum',
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telastumblers()
    {
        return $this->belongsTo('App\telastumblers');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->hasMany('App\procesos');
    }
}
