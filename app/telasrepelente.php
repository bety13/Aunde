<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telasrepelente extends Model
{

	protected $table = 'telasrepelentes';

	protected $primaryKey = 'id_Rep';


	protected $fillable = ['Diseño_Rep', 
						   'color_Rep', 
						   'OEM_Rep',

						   'MP_peso_Rep', 
						   'MP_anchoU_Rep', 
						   'MP_elongacionFW_Rep', 
						   'MP_rep_Rep', 
						   'MP_velcro_Rep', 
						   'MP_croking_Rep', 
						   'MP_flamabilidadWF_Rep', 
						   'MP_apari_Rep', 
						   'MP_tono_Rep', 

						   'UM_peso_Rep', 
						   'UM_anchoU_Rep', 
						   'UM_elongacionFW_Rep', 
						   'UM_rep_Rep', 
						   'UM_velcro_Rep', 
						   'UM_croking_Rep',
						    'UM_distanciaW_Rep',
							'UM_tiempoW_Rep',
							'UM_velocidadW_Rep',
							'UM_distanciaF_Rep',
							'UM_tiempoF_Rep',
							'UM_velocidadF_Rep' , 
							'UM_apari_Rep', 
							'UM_tono_Rep', 

						   'LSE_peso_Rep', 
						   'LSE_anchoU_Rep', 
						   'LSE_elongacionW_Rep', 
						   'LSE_elongacionF_Rep', 
						   'LSE_rep_Rep', 
						   'LSE_velcro_Rep', 
						   'LSE_croking_Rep', 
						   'LSE_distanciaW_Rep',
							'LSE_tiempoW_Rep',
							'LSE_velocidadW_Rep',
							'LSE_distanciaF_Rep',
							'LSE_tiempoF_Rep',
							'LSE_velocidadF_Rep',
						   'LSE_apari_Rep', 
						   'LSE_tono_Rep',

						   'LIE_peso_Rep', 
						   'LIE_anchoU_Rep', 
						   'LIE_elongacionW_Rep', 
						   'LIE_elongacionF_Rep',
						   'LIE_rep_Rep', 
						   'LIE_velcro_Rep', 
						   'LIE_croking_Rep', 
						   'LIE_distanciaW_Rep',
							'LIE_tiempoW_Rep',
							'LIE_velocidadW_Rep',
							'LIE_distanciaF_Rep',
							'LIE_tiempoF_Rep',
							'LIE_velocidadF_Rep',
						   'LIE_apari_Rep', 
						   'LIE_tono_Rep',

						   'id_Clien'];


	//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//

    public function clientes()
    {
        return $this->belongsToMany('App\clientes');
    }

     //---------------------------------------
    public function dgrepelentes()
    {
        return $this->hasOne('App\dgrepelentes');
    }
}
