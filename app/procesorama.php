<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesorama extends Model
{

	
    public function procesos()
    {
        return $this->belongsTo('App\procesos');
    }



    //-------------------------------------------------
    //                 P r o c e s o s                |
    //------------------------------------------------


    public function procesolavados()
    {
        return $this->hasOne('App\procesolavados');
    }


    public function procesotumblers()
    {
        return $this->hasOne('App\procesotumblers');
    }

    public function procesorepelentes()
    {
        return $this->hasOne('App\procesorepelentes');
    }

    public function procesobackings()
    {
        return $this->hasOne('App\procesobackings');
    }

    public function procesotermofijados()
    {
        return $this->hasOne('App\procesotermofijados');
    }

    public function procesopunzonados()
    {
        return $this->hasOne('App\procesopunzonados');
    }


}
