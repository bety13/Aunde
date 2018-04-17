<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telastermofijado extends Model
{
    protected $table = 'telastermofijados';

	protected $primaryKey = 'id_Termo';


	protected $fillable = ['Diseño_Termo', 
						   'color_Termo', 
						   'OEM_Termo',

						   'MP_peso_Termo', 
						   'MP_anchoU_Termo', 
						   'MP_elongacionW_F_Termo', 
						   'MP_espesor_Termo', 
						   'MP_lecColor_Termo', 
						   'MP_flamabilidad_Termo', 
						   'MP_apari_Termo', 
						   'MP_tono_Termo', 

						   'UM_peso_Termo', 
						   'UM_anchoU_Termo', 
						   'UM_elongacionW_F_Termo', 
						   'UM_espesor_Termo', 
						   'UM_lecColor_Termo',
						   'UM_distanciaW_Termo',
							'UM_tiempoW_Termo',
							'UM_velocidadW_Termo',
							'UM_distanciaF_Termo',
							'UM_tiempoF_Termo',
							'UM_velocidadF_Termo',
						   'UM_apari_Termo', 
						   'UM_tono_Termo',  

						   'LSE_peso_Termo', 
						   'LSE_anchoU_Termo', 
						   'LSE_W_Termo', 
						   'LSE_F_Termo', 
						   'LSE_espesor_Termo', 
						   'LSE_lecColorDL_Termo', 
						   'LSE_lecColorDA_Termo', 
						   'LSE_lecColorDB_Termo', 
						   'LSE_distanciaW_Termo',
							'LSE_tiempoW_Termo',
							'LSE_velocidadW_Termo',
							'LSE_distanciaF_Termo',
							'LSE_tiempoF_Termo',
							'LSE_velocidadF_Termo',
						   'LSE_apari_Termo', 
						   'LSE_tono_Termo', 

						   'LIE_peso_Termo', 
						   'LIE_anchoU_Termo', 
						   'LIE_W_Termo', 
						   'LIE_F_Termo', 
						   'LIE_espesor_Termo', 
						   'LIE_lecColorDL_Termo', 
						   'LIE_lecColorDA_Termo', 
						   'LIE_lecColorDB_Termo', 
						   'LIE_distanciaW_Termo',
							'LIE_tiempoW_Termo',
							'LIE_velocidadW_Termo',
							'LIE_distanciaF_Termo',
							'LIE_tiempoF_Termo',
							'LIE_velocidadF_Termo',
						   'LIE_apari_Termo', 
						   'LIE_tono_Termo', 
						   

						   'id_Clien'
						   ];


	//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//
    
    public function clientes()
    {
        return $this->belongsToMany('App\clientes');
    }
 //---------------------------------------
    public function dgtermofijados()
    {
        return $this->hasOne('App\dgtermofijados');
    }
}
