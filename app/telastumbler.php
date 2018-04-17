<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telastumbler extends Model
{
    protected $table = 'telastumblers';

	protected $primaryKey = 'id_Tum';


	protected $fillable = ['Diseño_Tum', 'color_Tum', 'OEM_Tum',
						   'MP_peso_Tum', 'MP_anchoU_Tum', 'MP_elongacionFW_Tum', 'MP_apari_Tum', 'MP_tono_Tum',
						   'UM_peso_Tum', 'UM_anchoU_Tum', 'UM_elongacionFW_Tum', 'UM_apari_Tum', 'UM_tono_Tum',
						   'LSE_peso_Tum', 'LSE_anchoU_Tum', 'LSE_elongacionW_Tum', 'LSE_elongacionF_Tum', 'LSE_apari_Tum', 'LSE_tono_Tum',
						   'LIE_peso_Tum', 'LIE_anchoU_Tum', 'LIE_elongacionW_Tum', 'LIE_elongacionF_Tum', 'LIE_apari_Tum', 'LIE_tono_Tum',
						   'id_Clien'];


//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//

	  public function clientes()
	    {
	      return $this->belongsToMany('App\clientes');
	    }

//------------------------------------------------------//
    public function dgtumblers()
    {
      return $this->hasOne('App\dgtumblers');
    }
}
 