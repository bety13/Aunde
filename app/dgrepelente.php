<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dgrepelente extends Model
{
    protected $table = 'dgrepelentes';

	protected $primaryKey = 'id_DGR';


	protected $fillable = ['fechaE_DGR',
						   'horaE_DGLR',
						   'Npieza_DGR',
						   'color_DGR',
						   'loteProd_DGR',
						   'equipo_DGR',
						   'batch_DGR',
						   'loteUrdido_DGR',
						   'folioBond_DGR',
						   'codProdTermin_DGR',
						   'nombreOpera_DGR',
						   'comentarios_DGR',
						   'id_Rep'
						   ];


    //---------------------------Uno a Uno-----------------------------------
    public function telasrepelentes()
    {
        return $this->belongsTo('App\telasrepelentes');
    }

    //------------------------------------------------------------------------

    public function procesos()
    {
        return $this->hasMany('App\procesos');
    }
}
