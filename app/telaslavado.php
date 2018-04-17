<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telaslavado extends Model
{
	
	protected $table = 'telaslavados';

	protected $primaryKey = 'id_Lav';


	protected $fillable = ['Diseño_Lav','color_Lav','OEM_Lav',
							   'MP_peso_Lav','MP_anchoU_Lav','MP_apari_Lav',
							   'UM_peso_Lav','UM_anchoU_Lav','UM_apari_Lav',
							   'LSE_peso_Lav','LSE_anchoU_Lav','LSE_apari_Lav',
							   'LIE_peso_Lav','LIE_anchoU_Lav','LIE_apari_Lav',
	               			   'id_Clien'];


	//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//

	  public function clientes()
	    {
	      return $this->belongsToMany('App\clientes');
	    }

	      //---------------------------------------
	  public function dglavados()
	    {
	        return $this->hasOne('App\dglavados');
	    }
}
