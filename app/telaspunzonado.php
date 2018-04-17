<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telaspunzonado extends Model
{
    protected $table = 'telaspunzonados';

	protected $primaryKey = 'id_Punzo';


	protected $fillable = ['Diseño_Punzo',
							'color_Punzo',
							'OEM_Punzo',

							'MP_peso_Punzo',
							'MP_anchoU_Punzo',
							'MP_apari_Punzo',

							'UM_peso_Punzo',
							'UM_anchoU_Punzo',
							'UM_apari_Punzo',

							'LSE_peso_Punzo',
							'LSE_anchoU_Punzo',
							'LSE_apari_Punzo',

							'LIE_peso_Punzo',
							'LIE_anchoU_Punzo',
							'LIE_apari_Punzo',
							
	               			'id_Clien'];

//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//

	  public function clientes()
	    {
	      return $this->belongsToMany('App\clientes');
	    }

 //---------------------------------------
    public function dgpunzonados()
    {
        return $this->hasOne('App\dgpunzonados');
    }
}
