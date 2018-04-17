<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procesos extends Model
{


	//----------------------------------------------------------
	//             D a t o s    G e n e r a l e s               |
	//----------------------------------------------------------

      public function dgtejidos()
    {
        return $this->belongsToMany('App\dgtejidos');
    }

      public function dglavados()
    {
        return $this->belongsToMany('App\dglavados');
    }

      public function dgtumblers()
    {
        return $this->belongsToMany('App\dgtumblers');
    }

      public function dgrepelentes()
    {
        return $this->belongsToMany('App\dgrepelentes');
    }

      public function dgbackings()
    {
        return $this->belongsToMany('App\dgbackings');
    }

      public function dgtermofijados()
    {
        return $this->belongsToMany('App\dgtermofijados');
    }

      public function dgpunzonados()
    {
        return $this->belongsToMany('App\dgpunzonados');
    }

      public function dgbondeos()
    {
        return $this->belongsToMany('App\dgbondeos');
    }



  //----------------------------------------------------------
  //                      P r o c e s o s                    |
  //----------------------------------------------------------

 


    public function procesotejidos()
    {
        return $this->hasOne('App\procesotejidos');
    }

    public function procesoramas()
    {
        return $this->hasOne('App\procesoramas');
    }

    public function procesobondeos()
    {
        return $this->hasOne('App\procesobondeos');
    }

}
