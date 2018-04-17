<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telasrepelente;
use App\Http\Requests\telasrepelenteRequest;
use DB;
use App\clientes;

class TelasrepelenteController extends Controller
{
    public function index()
    {
    /*	$repelente = telasrepelente::orderBy('id_Rep','DESC')->paginate();
    */
        $repelente = DB::table('telasrepelentes')
            ->join('clientes', 'telasrepelentes.id_Clien', '=', 'clientes.id_Clien')
            ->select('telasrepelentes.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-repelente.index',compact('repelente'));
    }

    ///

    public function destroy($id_Rep)
    {
    	$repelent = telasrepelente::find($id_Rep);
    	$repelent->delete();

    	return back();
    }

    ///

    public function create()
    {
         $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-repelente.create', compact('clien'));
    }

    ///

    public function store(telasrepelenteRequest $request)
    {
        $repelent = new telasrepelente;

        $repelent->Diseño_Rep = $request->Diseño_Rep;
        $repelent->color_Rep = $request->color_Rep;
        $repelent->OEM_Rep = $request->OEM_Rep;

        $repelent->MP_peso_Rep = $request->MP_peso_Rep;
        $repelent->MP_anchoU_Rep = $request->MP_anchoU_Rep;
        $repelent->MP_elongacionFW_Rep = $request->MP_elongacionFW_Rep;
        $repelent->MP_rep_Rep = $request->MP_rep_Rep;
        $repelent->MP_velcro_Rep = $request->MP_velcro_Rep;
        $repelent->MP_croking_Rep = $request->MP_croking_Rep;
        $repelent->MP_flamabilidadWF_Rep = $request->MP_flamabilidadWF_Rep;
        $repelent->MP_apari_Rep = $request->MP_apari_Rep;
        $repelent->MP_tono_Rep = $request->MP_tono_Rep;

        $repelent->UM_peso_Rep = $request->UM_peso_Rep;
        $repelent->UM_anchoU_Rep = $request->UM_anchoU_Rep;
        $repelent->UM_elongacionFW_Rep = $request->UM_elongacionFW_Rep;
        $repelent->UM_rep_Rep = $request->UM_rep_Rep;
        $repelent->UM_velcro_Rep = $request->UM_velcro_Rep;
        $repelent->UM_croking_Rep = $request->UM_croking_Rep;
        $repelent->UM_distanciaW_Rep = $request->UM_distanciaW_Rep;
        $repelent->UM_tiempoW_Rep = $request->UM_tiempoW_Rep;
        $repelent->UM_velocidadW_Rep = $request->UM_velocidadW_Rep;
        $repelent->UM_distanciaF_Rep = $request->UM_distanciaF_Rep;
        $repelent->UM_tiempoF_Rep = $request->UM_tiempoF_Rep;
        $repelent->UM_velocidadF_Rep = $request->UM_velocidadF_Rep;
        $repelent->UM_apari_Rep = $request->UM_apari_Rep;
        $repelent->UM_tono_Rep = $request->UM_tono_Rep;

        $repelent->LSE_peso_Rep = $request->LSE_peso_Rep;
        $repelent->LSE_anchoU_Rep = $request->LSE_anchoU_Rep;
        $repelent->LSE_elongacionW_Rep = $request->LSE_elongacionW_Rep;
        $repelent->LSE_elongacionF_Rep = $request->LSE_elongacionF_Rep;
        $repelent->LSE_rep_Rep = $request->LSE_rep_Rep;
        $repelent->LSE_velcro_Rep = $request->LSE_velcro_Rep;
        $repelent->LSE_croking_Rep = $request->LSE_croking_Rep;
        $repelent->LSE_distanciaW_Rep = $request->LSE_distanciaW_Rep;
        $repelent->LSE_tiempoW_Rep = $request->LSE_tiempoW_Rep;
        $repelent->LSE_velocidadW_Rep = $request->LSE_velocidadW_Rep;
        $repelent->LSE_distanciaF_Rep = $request->LSE_distanciaF_Rep;
        $repelent->LSE_tiempoF_Rep = $request->LSE_tiempoF_Rep;
        $repelent->LSE_velocidadF_Rep = $request->LSE_velocidadF_Rep;
        $repelent->LSE_apari_Rep = $request->LSE_apari_Rep;
        $repelent->LSE_tono_Rep = $request->LSE_tono_Rep;

        $repelent->LIE_peso_Rep = $request->LIE_peso_Rep;
        $repelent->LIE_anchoU_Rep = $request->LIE_anchoU_Rep;
        $repelent->LIE_elongacionW_Rep = $request->LIE_elongacionW_Rep;
        $repelent->LIE_elongacionF_Rep = $request->LIE_elongacionF_Rep;
        $repelent->LIE_rep_Rep = $request->LIE_rep_Rep;
        $repelent->LIE_velcro_Rep = $request->LIE_velcro_Rep;
        $repelent->LIE_croking_Rep = $request->LIE_croking_Rep;
        $repelent->LIE_distanciaW_Rep = $request->LIE_distanciaW_Rep;
        $repelent->LIE_tiempoW_Rep = $request->LIE_tiempoW_Rep;
        $repelent->LIE_velocidadW_Rep = $request->LIE_velocidadW_Rep;
        $repelent->LIE_distanciaF_Rep = $request->LIE_distanciaF_Rep;
        $repelent->LIE_tiempoF_Rep = $request->LIE_tiempoF_Rep;
        $repelent->LIE_velocidadF_Rep = $request->LIE_velocidadF_Rep;
        $repelent->LIE_apari_Rep = $request->LIE_apari_Rep;
        $repelent->LIE_tono_Rep = $request->LIE_tono_Rep;
        $repelent->id_Clien = $request->id_Clien;

        $repelent->save();

        return redirect()->route('telasrepelentes.index');
    }

    ///

    public function edit($id_Rep)
    {
        $repelent = telasrepelente::find($id_Rep);
        $clien = clientes::find( 'id_Clien');
        return view('telas-repelente.edit', compact('repelent', 'clien'));
    }

    ///

    public function update(telasrepelenteRequest $request, $id_Rep)
    {
        $repelent = telasrepelente::find($id_Rep);

        $repelent->Diseño_Rep = $request->Diseño_Rep;
        $repelent->color_Rep = $request->color_Rep;
        $repelent->OEM_Rep = $request->OEM_Rep;

        $repelent->MP_peso_Rep = $request->MP_peso_Rep;
        $repelent->MP_anchoU_Rep = $request->MP_anchoU_Rep;
        $repelent->MP_elongacionFW_Rep = $request->MP_elongacionFW_Rep;
        $repelent->MP_rep_Rep = $request->MP_rep_Rep;
        $repelent->MP_velcro_Rep = $request->MP_velcro_Rep;
        $repelent->MP_croking_Rep = $request->MP_croking_Rep;
        $repelent->MP_flamabilidadWF_Rep = $request->MP_flamabilidadWF_Rep;
        $repelent->MP_apari_Rep = $request->MP_apari_Rep;
        $repelent->MP_tono_Rep = $request->MP_tono_Rep;

        $repelent->UM_peso_Rep = $request->UM_peso_Rep;
        $repelent->UM_anchoU_Rep = $request->UM_anchoU_Rep;
        $repelent->UM_elongacionFW_Rep = $request->UM_elongacionFW_Rep;
        $repelent->UM_rep_Rep = $request->UM_rep_Rep;
        $repelent->UM_velcro_Rep = $request->UM_velcro_Rep;
        $repelent->UM_croking_Rep = $request->UM_croking_Rep;
        $repelent->UM_distanciaW_Rep = $request->UM_distanciaW_Rep;
        $repelent->UM_tiempoW_Rep = $request->UM_tiempoW_Rep;
        $repelent->UM_velocidadW_Rep = $request->UM_velocidadW_Rep;
        $repelent->UM_distanciaF_Rep = $request->UM_distanciaF_Rep;
        $repelent->UM_tiempoF_Rep = $request->UM_tiempoF_Rep;
        $repelent->UM_velocidadF_Rep = $request->UM_velocidadF_Rep;
        $repelent->UM_apari_Rep = $request->UM_apari_Rep;
        $repelent->UM_tono_Rep = $request->UM_tono_Rep;

        $repelent->LSE_peso_Rep = $request->LSE_peso_Rep;
        $repelent->LSE_anchoU_Rep = $request->LSE_anchoU_Rep;
        $repelent->LSE_elongacionW_Rep = $request->LSE_elongacionW_Rep;
        $repelent->LSE_elongacionF_Rep = $request->LSE_elongacionF_Rep;
        $repelent->LSE_rep_Rep = $request->LSE_rep_Rep;
        $repelent->LSE_velcro_Rep = $request->LSE_velcro_Rep;
        $repelent->LSE_croking_Rep = $request->LSE_croking_Rep;
        $repelent->LSE_distanciaW_Rep = $request->LSE_distanciaW_Rep;
        $repelent->LSE_tiempoW_Rep = $request->LSE_tiempoW_Rep;
        $repelent->LSE_velocidadW_Rep = $request->LSE_velocidadW_Rep;
        $repelent->LSE_distanciaF_Rep = $request->LSE_distanciaF_Rep;
        $repelent->LSE_tiempoF_Rep = $request->LSE_tiempoF_Rep;
        $repelent->LSE_velocidadF_Rep = $request->LSE_velocidadF_Rep;
        $repelent->LSE_apari_Rep = $request->LSE_apari_Rep;
        $repelent->LSE_tono_Rep = $request->LSE_tono_Rep;

        $repelent->LIE_peso_Rep = $request->LIE_peso_Rep;
        $repelent->LIE_anchoU_Rep = $request->LIE_anchoU_Rep;
        $repelent->LIE_elongacionW_Rep = $request->LIE_elongacionW_Rep;
        $repelent->LIE_elongacionF_Rep = $request->LIE_elongacionF_Rep;
        $repelent->LIE_rep_Rep = $request->LIE_rep_Rep;
        $repelent->LIE_velcro_Rep = $request->LIE_velcro_Rep;
        $repelent->LIE_croking_Rep = $request->LIE_croking_Rep;
        $repelent->LIE_distanciaW_Rep = $request->LIE_distanciaW_Rep;
        $repelent->LIE_tiempoW_Rep = $request->LIE_tiempoW_Rep;
        $repelent->LIE_velocidadW_Rep = $request->LIE_velocidadW_Rep;
        $repelent->LIE_distanciaF_Rep = $request->LIE_distanciaF_Rep;
        $repelent->LIE_tiempoF_Rep = $request->LIE_tiempoF_Rep;
        $repelent->LIE_velocidadF_Rep = $request->LIE_velocidadF_Rep;
        $repelent->LIE_apari_Rep = $request->LIE_apari_Rep;
        $repelent->LIE_tono_Rep = $request->LIE_tono_Rep;
        $repelent->id_Clien = $request->id_Clien;

        $repelent->save();

        return redirect()->route('telasrepelentes.index');
    }
}
