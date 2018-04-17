<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telastermofijado;
use App\Http\Requests\telastermofijadoRequest;
use DB;
use App\clientes;

class TelastermofijadoController extends Controller
{
	public function index()
    {
    	/*$termos = telastermofijado::orderBy('id_Termo','DESC')->paginate();
        */

        $termos = DB::table('telastermofijados')
            ->join('clientes', 'telastermofijados.id_Clien', '=', 'clientes.id_Clien')
            ->select('telastermofijados.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-termo.index',compact('termos'));
    }

    ///

    public function destroy($id_Termo)
    {
    	$termo = telastermofijado::find($id_Termo);
    	$termo->delete();

    	return back();
    }

    ///

    public function create()
    {
        $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-termo.create', compact('clien'));
    }

    ///

    public function store(telastermofijadoRequest $request)
    {
        $termo = new telastermofijado;

        $termo->Diseño_Termo = $request->Diseño_Termo;
        $termo->color_Termo = $request->color_Termo;
        $termo->OEM_Termo = $request->OEM_Termo;

        $termo->MP_peso_Termo = $request->MP_peso_Termo;
        $termo->MP_anchoU_Termo = $request->MP_anchoU_Termo;
        $termo->MP_elongacionW_F_Termo = $request->MP_elongacionW_F_Termo;
        $termo->MP_espesor_Termo = $request->MP_espesor_Termo;
        $termo->MP_lecColor_Termo = $request->MP_lecColor_Termo;
        $termo->MP_flamabilidad_Termo = $request->MP_flamabilidad_Termo;
        $termo->MP_apari_Termo = $request->MP_apari_Termo;
        $termo->MP_tono_Termo = $request->MP_tono_Termo;

        $termo->UM_peso_Termo = $request->UM_peso_Termo;
        $termo->UM_anchoU_Termo = $request->UM_anchoU_Termo;
        $termo->UM_elongacionW_F_Termo = $request->UM_elongacionW_F_Termo;
        $termo->UM_espesor_Termo = $request->UM_espesor_Termo;
        $termo->UM_lecColor_Termo = $request->UM_lecColorDL_Termo;
        $termo->UM_distanciaW_Termo = $request->UM_distanciaW_Termo;
        $termo->UM_tiempoW_Termo = $request->UM_tiempoW_Termo;
        $termo->UM_velocidadW_Termo = $request->UM_velocidadW_Termo;
        $termo->UM_distanciaF_Termo = $request->UM_distanciaF_Termo;
        $termo->UM_tiempoF_Termo = $request->UM_tiempoF_Termo;
        $termo->UM_velocidadF_Termo = $request->UM_velocidadF_Termo;
        $termo->UM_apari_Termo = $request->UM_apari_Termo;
        $termo->UM_tono_Termo = $request->UM_tono_Termo;

        $termo->LSE_peso_Termo = $request->LSE_peso_Termo;
        $termo->LSE_anchoU_Termo = $request->LSE_anchoU_Termo;
        $termo->LSE_W_Termo = $request->LSE_W_Termo;
        $termo->LSE_F_Termo = $request->LSE_F_Termo;
        $termo->LSE_espesor_Termo = $request->LSE_espesor_Termo;
        $termo->LSE_lecColorDL_Termo = $request->LSE_lecColorDL_Termo;
        $termo->LSE_lecColorDA_Termo = $request->LSE_lecColorDA_Termo;
        $termo->LSE_lecColorDB_Termo = $request->LSE_lecColorDB_Termo;
        $termo->LSE_distanciaW_Termo = $request->LSE_distanciaW_Termo;
        $termo->LSE_tiempoW_Termo = $request->LSE_tiempoW_Termo;
        $termo->LSE_velocidadW_Termo = $request->LSE_velocidadW_Termo;
        $termo->LSE_distanciaF_Termo = $request->LSE_distanciaF_Termo;
        $termo->LSE_tiempoF_Termo = $request->LSE_tiempoF_Termo;
        $termo->LSE_velocidadF_Termo = $request->LSE_velocidadF_Termo;
        $termo->LSE_apari_Termo = $request->LSE_apari_Termo;
        $termo->LSE_tono_Termo = $request->LSE_tono_Termo;

        $termo->LIE_peso_Termo = $request->LIE_peso_Termo;
        $termo->LIE_anchoU_Termo = $request->LIE_anchoU_Termo;
        $termo->LIE_W_Termo = $request->LIE_W_Termo;
        $termo->LIE_F_Termo = $request->LIE_F_Termo;
        $termo->LIE_espesor_Termo = $request->LIE_espesor_Termo;
        $termo->LIE_lecColorDL_Termo = $request->LIE_lecColorDL_Termo;
        $termo->LIE_lecColorDA_Termo = $request->LIE_lecColorDA_Termo;
        $termo->LIE_lecColorDB_Termo = $request->LIE_lecColorDB_Termo;
        $termo->LIE_distanciaW_Termo = $request->LIE_distanciaW_Termo;
        $termo->LIE_tiempoW_Termo = $request->LIE_tiempoW_Termo;
        $termo->LIE_velocidadW_Termo = $request->LIE_velocidadW_Termo;
        $termo->LIE_distanciaF_Termo = $request->LIE_distanciaF_Termo;
        $termo->LIE_tiempoF_Termo = $request->LIE_tiempoF_Termo;
        $termo->LIE_velocidadF_Termo = $request->LIE_velocidadF_Termo;
        $termo->LIE_apari_Termo = $request->LIE_apari_Termo;
        $termo->LIE_tono_Termo = $request->LIE_tono_Termo;
        $termo->id_Clien = $request->id_Clien;
       

        $termo->save();

        return redirect()->route('telastermofijados.index');
    }

    ///

    public function edit($id_Termo)
    {
        $termo = telastermofijado::find($id_Termo);
        $clien = clientes::find( 'id_Clien');
        return view('telas-termo.edit', compact('termo', 'clien'));
    }

    ///

    public function update(telastermofijadoRequest $request, $id_Termo)
    {
        $termo = telastermofijado::find($id_Termo);

        $termo->Diseño_Termo = $request->Diseño_Termo;
        $termo->color_Termo = $request->color_Termo;
        $termo->OEM_Termo = $request->OEM_Termo;

        $termo->MP_peso_Termo = $request->MP_peso_Termo;
        $termo->MP_anchoU_Termo = $request->MP_anchoU_Termo;
        $termo->MP_elongacionW_F_Termo = $request->MP_elongacionW_F_Termo;
        $termo->MP_espesor_Termo = $request->MP_espesor_Termo;
        $termo->MP_lecColor_Termo = $request->MP_lecColor_Termo;
        $termo->MP_flamabilidad_Termo = $request->MP_flamabilidad_Termo;
        $termo->MP_apari_Termo = $request->MP_apari_Termo;
        $termo->MP_tono_Termo = $request->MP_tono_Termo;

        $termo->UM_peso_Termo = $request->UM_peso_Termo;
        $termo->UM_anchoU_Termo = $request->UM_anchoU_Termo;
        $termo->UM_elongacionW_F_Termo = $request->UM_elongacionW_F_Termo;
        $termo->UM_espesor_Termo = $request->UM_espesor_Termo;
        $termo->UM_lecColor_Termo = $request->UM_lecColorDL_Termo;
        $termo->UM_distanciaW_Termo = $request->UM_distanciaW_Termo;
        $termo->UM_tiempoW_Termo = $request->UM_tiempoW_Termo;
        $termo->UM_velocidadW_Termo = $request->UM_velocidadW_Termo;
        $termo->UM_distanciaF_Termo = $request->UM_distanciaF_Termo;
        $termo->UM_tiempoF_Termo = $request->UM_tiempoF_Termo;
        $termo->UM_velocidadF_Termo = $request->UM_velocidadF_Termo;
        $termo->UM_apari_Termo = $request->UM_apari_Termo;
        $termo->UM_tono_Termo = $request->UM_tono_Termo;

        $termo->LSE_peso_Termo = $request->LSE_peso_Termo;
        $termo->LSE_anchoU_Termo = $request->LSE_anchoU_Termo;
        $termo->LSE_W_Termo = $request->LSE_W_Termo;
        $termo->LSE_F_Termo = $request->LSE_F_Termo;
        $termo->LSE_espesor_Termo = $request->LSE_espesor_Termo;
        $termo->LSE_lecColorDL_Termo = $request->LSE_lecColorDL_Termo;
        $termo->LSE_lecColorDA_Termo = $request->LSE_lecColorDA_Termo;
        $termo->LSE_lecColorDB_Termo = $request->LSE_lecColorDB_Termo;
        $termo->LSE_distanciaW_Termo = $request->LSE_distanciaW_Termo;
        $termo->LSE_tiempoW_Termo = $request->LSE_tiempoW_Termo;
        $termo->LSE_velocidadW_Termo = $request->LSE_velocidadW_Termo;
        $termo->LSE_distanciaF_Termo = $request->LSE_distanciaF_Termo;
        $termo->LSE_tiempoF_Termo = $request->LSE_tiempoF_Termo;
        $termo->LSE_velocidadF_Termo = $request->LSE_velocidadF_Termo;
        $termo->LSE_apari_Termo = $request->LSE_apari_Termo;
        $termo->LSE_tono_Termo = $request->LSE_tono_Termo;

        $termo->LIE_peso_Termo = $request->LIE_peso_Termo;
        $termo->LIE_anchoU_Termo = $request->LIE_anchoU_Termo;
        $termo->LIE_W_Termo = $request->LIE_W_Termo;
        $termo->LIE_F_Termo = $request->LIE_F_Termo;
        $termo->LIE_espesor_Termo = $request->LIE_espesor_Termo;
        $termo->LIE_lecColorDL_Termo = $request->LIE_lecColorDL_Termo;
        $termo->LIE_lecColorDA_Termo = $request->LIE_lecColorDA_Termo;
        $termo->LIE_lecColorDB_Termo = $request->LIE_lecColorDB_Termo;
        $termo->LIE_distanciaW_Termo = $request->LIE_distanciaW_Termo;
        $termo->LIE_tiempoW_Termo = $request->LIE_tiempoW_Termo;
        $termo->LIE_velocidadW_Termo = $request->LIE_velocidadW_Termo;
        $termo->LIE_distanciaF_Termo = $request->LIE_distanciaF_Termo;
        $termo->LIE_tiempoF_Termo = $request->LIE_tiempoF_Termo;
        $termo->LIE_velocidadF_Termo = $request->LIE_velocidadF_Termo;
        $termo->LIE_apari_Termo = $request->LIE_apari_Termo;
        $termo->LIE_tono_Termo = $request->LIE_tono_Termo;
        $termo->id_Clien = $request->id_Clien;
        

        $termo->id_Clien = $request->id_Clien;

        $termo->save();

        return redirect()->route('telastermofijados.index');
    }
    
}
