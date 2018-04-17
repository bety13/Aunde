<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telastejido extends Model
{

protected $table = 'telastejidos';

protected $primaryKey = 'id_Tej';


protected $fillable = ['Diseño_Tej','color_Tej','OEM_Tej',
						   'MP_peso_Tej','MP_anchoU_Tej','MP_apari_Tej',
						   'UM_peso_Tej','UM_anchoU_Tej','UM_apari_Tej',
						   'LSE_peso_Tej','LSE_anchoU_Tej','LSE_apari_Tej',
						   'LIE_peso_Tej','LIE_anchoU_Tej','LIE_apari_Tej',
               			   'id_Clien'];


//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//

  public function clientes()
    {
      return $this->belongsToMany('App\clientes');
    }

//------------------------------------------------------//
    public function dgtejidos()
    {
      return $this->hasOne('App\dgtejidos');
    }

    
}

