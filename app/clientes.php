<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{

	protected $primaryKey = 'id_Clien';
	
    protected $fillable = ['NumeroCliente','nombreCliente','direccionC'];



	//___________R  E  L  A  C  I  O  N  E  S                  T  A  B  L  A  S________________________//
	
    public function telastejidos()
    {
        return $this->belongsToMany('App\telastejidos');
    }

    public function telaslavados()
    {
        return $this->belongsToMany('App\telaslavados');
    }

    public function telastumblers()
    {
        return $this->belongsToMany('App\telastumblers');
    }

    public function telasrepelentes()
    {
        return $this->belongsToMany('App\telasrepelentes');
    }

    public function telasbackings()
    {
        return $this->belongsToMany('App\telasbackings');
    }

    public function telastermofijados()
    {
        return $this->belongsToMany('App\telastermofijados');
    }

    public function telaspunzonados()
    {
        return $this->belongsToMany('App\telaspunzonados');
    }

    public function telasbondeos()
    {
        return $this->belongsToMany('App\telasbondeos');
    }
}
