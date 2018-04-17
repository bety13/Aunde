<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telasbondeo extends Model
{
    protected $table = 'telasbondeos';

	protected $primaryKey = 'id_Bondeo';


	protected $fillable = ['Diseño_Bondeo', 
						   'color_Bondeo', 
						   'OEM_Bondeo',

						   'MP_peso_Bondeo', 
						   'MP_espesor_Bondeo', 
						   'MP_anchoU_Bondeo', 
						   'MP_adhesion_Bondeo', 
						   'MP_elongacion_Bondeo', 
						   'MP_flamabilidad_Bondeo', 
						   'MP_apariencia_Bondeo', 
						   'MP_tono_Bondeo', 
						   'MP_recuperacion_Bondeo', 
						   'MP_lecColor_Bondeo', 

						   'UM_peso_Bondeo', 
						   'UM_espesor_Bondeo', 
						   'UM_anchoU_Bondeo', 
						   'UM_adhesion_Bondeo', 
						   'UM_elongacion_Bondeo', 
						   'UM_distanciaW_Bondeo',
							'UM_tiempoW_Bondeo',
							'UM_velocidadW_Bondeo',
							'UM_distanciaF_Bondeo',
							'UM_tiempoF_Bondeo',
							'UM_velocidadF_Bondeo' ,
						   'UM_apariencia_Bondeo', 
						   'UM_tono_Bondeo',
						   'UM_recuperacion_Bondeo', 
						   'UM_lecColor_Bondeo',  

						   'LSE_peso_Bondeo', 
						   'LSE_espesor_Bondeo', 
						   'LSE_anchoU_Bondeo', 
						   'LSE_adhesionWTU_Bondeo',
							'LSE_adhesionFTU_Bondeo',
							'LSE_adhesionWSU_Bondeo',
							'LSE_adhesionFSU_Bondeo' ,
						   'LSE_elongacionW_Bondeo', 
						   'LSE_elongacionF_Bondeo', 
						   'LSE_distanciaW_Bondeo',
							'LSE_tiempoW_Bondeo',
							'LSE_velocidadW_Bondeo',
							'LSE_distanciaF_Bondeo',
							'LSE_tiempoF_Bondeo',
							'LSE_velocidadF_Bondeo' ,
						   'LSE_apariencia_Bondeo', 
						   'LSE_tono_Bondeo', 
						   'LSE_recuperacion_Bondeo',
						   'LSE_lecColordL_Bondeo', 
						   'LSE_lecColorda_Bondeo', 
						   'LSE_lecColordb_Bondeo', 

						   'LIE_peso_Bondeo', 
						   'LIE_espesor_Bondeo', 
						   'LIE_anchoU_Bondeo', 
						   'LSE_adhesionWTU_Bondeo',
							'LSE_adhesionFTU_Bondeo',
							'LSE_adhesionWSU_Bondeo',
							'LSE_adhesionFSU_Bondeo' ,
						   'LIE_elongacionW_Bondeo', 
						   'LIE_elongacionF_Bondeo', 
						   'LIE_distanciaW_Bondeo',
							'LIE_tiempoW_Bondeo',
							'LIE_velocidadW_Bondeo',
							'LIE_distanciaF_Bondeo',
							'LIE_tiempoF_Bondeo',
							'LIE_velocidadF_Bondeo' ,
						   'LIE_apariencia_Bondeo',
						   'LIE_tono_Bondeo', 
						   'LIE_recuperacion_Bondeo', 
						   'LIE_lecColordL_Bondeo', 
						   'LIE_lecColorda_Bondeo', 
						   'LIE_lecColordb_Bondeo',
						   

						   'id_Clien'
						   ];


	//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//
    
    public function clientes()
    {
        return $this->belongsToMany('App\clientes');
    }

    //---------------------------------------
    public function dgbondeos()
    {
        return $this->hasOne('App\dgbondeos');
    }
}
