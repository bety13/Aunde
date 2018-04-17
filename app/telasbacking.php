<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telasbacking extends Model
{
	protected $table = 'telasbackings';

	protected $primaryKey = 'id_Back';


	protected $fillable = ['Diseño_Back', 
						   'color_Back', 
						   'OEM_Back',

						   'MP_peso_Back', 
						   'MP_anchoU_Back', 
						   'MP_elongacionFW_Back', 
						   'MP_velcro_Back', 
						   'MP_croking_Back', 
						   'MP_flamabilidadWF_Back', 
						   'MP_apari_Back', 
						   'MP_tono_Back', 

						   'UM_peso_Back', 
						   'UM_anchoU_Back', 
						   'UM_elongacionFW_Back', 
						   'UM_velcro_Back', 
						   'UM_croking_Back', 
						   'UM_distanciaW_Back',
							'UM_tiempoW_Back',
							'UM_velocidadW_Back',
							'UM_distanciaF_Back',
							'UM_tiempoF_Back',
							'UM_velocidadF_Back',
						   'UM_apari_Back', 
						   'UM_tono_Back', 

						   'LSE_peso_Back', 
						   'LSE_anchoU_Back', 
						   'LSE_elongacionW_Back', 
						   'LSE_elongacionF_Back', 
						   'LSE_velcro_Back', 
						   'LSE_croking_Back', 
						   'LSE_distanciaW_Back',
							'LSE_tiempoW_Back',
							'LSE_velocidadW_Back',
							'LSE_distanciaF_Back',
							'LSE_tiempoF_Back',
							'LSE_velocidadF_Back' ,
						   'LSE_apari_Back', 
						   'LSE_tono_Back',

						   'LIE_peso_Back', 
						   'LIE_anchoU_Back', 
						   'LIE_elongacionW_Back',
						   'LIE_elongacionF_Back', 
						   'LIE_velcro_Back', 
						   'LIE_croking_Back', 
						   'LIE_distanciaW_Back',
							'LIE_tiempoW_Back',
							'LIE_velocidadW_Back',
							'LIE_distanciaF_Back',
							'LIE_tiempoF_Back',
							'LIE_velocidadF_Back',
						   'LIE_apari_Back', 
						   'LIE_tono_Back', 

						   'id_Clien'
						   ];


//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//
    
    public function clientes()
    {
        return $this->belongsToMany('App\Clientes');
    } 

//---------------------------------------
    public function dgbackings()
    {
        return $this->hasOne('App\dgbackings');
    }
}
