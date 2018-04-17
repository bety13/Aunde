<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telasbacking;
use App\Http\Requests\telasbackingRequest;
use DB;
use App\clientes;

class TelasbackingController extends Controller
{
    public function index()
    {
    /*	$backings = telasbacking::orderBy('id_Back','DESC')->paginate();
    */
        $backings = DB::table('telasbackings')
            ->join('clientes', 'telasbackings.id_Clien', '=', 'clientes.id_Clien')
            ->select('telasbackings.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-backing.index',compact('backings'));
    }

    ///

    public function destroy($id_Back)
    {
    	$backing = telasbacking::find($id_Back);
    	$backing->delete();

    	return back();
    }

    ///

    public function create()
    {
         $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-backing.create', compact('clien'));
    }

    ///

    public function store(telasbackingRequest $request)
    {
        $backing = new telasbacking;

        $backing->Diseño_Back = $request->Diseño_Back;
        $backing->color_Back = $request->color_Back;
        $backing->OEM_Back = $request->OEM_Back;

        $backing->MP_peso_Back = $request->MP_peso_Back;
        $backing->MP_anchoU_Back = $request->MP_anchoU_Back;
        $backing->MP_elongacionFW_Back = $request->MP_elongacionFW_Back;
        $backing->MP_rep_Back = $request->MP_rep_Back;
        $backing->MP_velcro_Back = $request->MP_velcro_Back;
        $backing->MP_croking_Back = $request->MP_croking_Back;
        $backing->MP_flamabilidadWF_Back = $request->MP_flamabilidadWF_Back;
        $backing->MP_apari_Back = $request->MP_apari_Back;
        $backing->MP_tono_Back = $request->MP_tono_Back;

        $backing->UM_peso_Back = $request->UM_peso_Back;
        $backing->UM_anchoU_Back = $request->UM_anchoU_Back; 
        $backing->UM_elongacionFW_Back = $request->UM_elongacionFW_Back;
        $backing->UM_rep_Back = $request->UM_rep_Back;
        $backing->UM_velcro_Back = $request->UM_velcro_Back;
        $backing->UM_croking_Back = $request->UM_croking_Back;
        $backing->UM_distanciaW_Back = $request->UM_distanciaW_Back;
        $backing->UM_tiempoW_Back = $request->UM_tiempoW_Back;
        $backing->UM_velocidadW_Back = $request->UM_velocidadW_Back;
        $backing->UM_distanciaF_Back = $request->UM_distanciaF_Back;
        $backing->UM_tiempoF_Back = $request->UM_tiempoF_Back;
        $backing->UM_velocidadF_Back = $request->UM_velocidadF_Back;
        $backing->UM_apari_Back = $request->UM_apari_Back;
        $backing->UM_tono_Back = $request->UM_tono_Back;

        $backing->LSE_peso_Back = $request->LSE_peso_Back;
        $backing->LSE_anchoU_Back = $request->LSE_anchoU_Back;
        $backing->LSE_elongacionW_Back = $request->LSE_elongacionW_Back;
        $backing->LSE_elongacionF_Back = $request->LSE_elongacionF_Back;
        $backing->LSE_rep_Back = $request->LSE_rep_Back;
        $backing->LSE_velcro_Back = $request->LSE_velcro_Back;
        $backing->LSE_croking_Back = $request->LSE_croking_Back;
        $backing->LSE_distanciaW_Back = $request->LSE_distanciaW_Back;
        $backing->LSE_tiempoW_Back = $request->LSE_tiempoW_Back;
        $backing->LSE_velocidadW_Back = $request->LSE_velocidadW_Back;
        $backing->LSE_distanciaF_Back = $request->LSE_distanciaF_Back;
        $backing->LSE_tiempoF_Back = $request->LSE_tiempoF_Back;
        $backing->LSE_velocidadF_Back = $request->LSE_velocidadF_Back;
        $backing->LSE_apari_Back = $request->LSE_apari_Back;
        $backing->LSE_tono_Back = $request->LSE_tono_Back;

        $backing->LIE_peso_Back = $request->LIE_peso_Back;
        $backing->LIE_anchoU_Back = $request->LIE_anchoU_Back;
        $backing->LIE_elongacionW_Back = $request->LIE_elongacionW_Back;
        $backing->LIE_elongacionF_Back = $request->LIE_elongacionF_Back;
        $backing->LIE_rep_Back = $request->LIE_rep_Back;
        $backing->LIE_velcro_Back = $request->LIE_velcro_Back;
        $backing->LIE_croking_Back = $request->LIE_croking_Back;
        $backing->LIE_distanciaW_Back = $request->LIE_distanciaW_Back;
        $backing->LIE_tiempoW_Back = $request->LIE_tiempoW_Back;
        $backing->LIE_velocidadW_Back = $request->LIE_velocidadW_Back;
        $backing->LIE_distanciaF_Back = $request->LIE_distanciaF_Back;
        $backing->LIE_tiempoF_Back = $request->LIE_tiempoF_Back;
        $backing->LIE_velocidadF_Back = $request->LIE_velocidadF_Back;
        $backing->LIE_apari_Back = $request->LIE_apari_Back;
        $backing->LIE_tono_Back = $request->LIE_tono_Back;
        $backing->id_Clien = $request->id_Clien;
       

        $backing->save();

        return redirect()->route('telasbackings.index');
    }

    ///

    public function edit($id_Back)
    {
        $backing = telasbacking::find($id_Back);
        $clien = clientes::find( 'id_Clien');
        return view('telas-backing.edit', compact('backing', 'clien'));
    }

    ///

    public function update(telasbackingRequest $request, $id_Back)
    {
        $backing = telasbacking::find($id_Back);

        $backing->Diseño_Back = $request->Diseño_Back;
        $backing->color_Back = $request->color_Back;
        $backing->OEM_Back = $request->OEM_Back;

        $backing->MP_peso_Back = $request->MP_peso_Back;
        $backing->MP_anchoU_Back = $request->MP_anchoU_Back;
        $backing->MP_elongacionFW_Back = $request->MP_elongacionFW_Back;
        $backing->MP_rep_Back = $request->MP_rep_Back;
        $backing->MP_velcro_Back = $request->MP_velcro_Back;
        $backing->MP_croking_Back = $request->MP_croking_Back;
        $backing->MP_flamabilidadWF_Back = $request->MP_flamabilidadWF_Back;
        $backing->MP_apari_Back = $request->MP_apari_Back;
        $backing->MP_tono_Back = $request->MP_tono_Back;

        $backing->UM_peso_Back = $request->UM_peso_Back;
        $backing->UM_anchoU_Back = $request->UM_anchoU_Back; 
        $backing->UM_elongacionFW_Back = $request->UM_elongacionFW_Back;
        $backing->UM_rep_Back = $request->UM_rep_Back;
        $backing->UM_velcro_Back = $request->UM_velcro_Back;
        $backing->UM_croking_Back = $request->UM_croking_Back;
        $backing->UM_distanciaW_Back = $request->UM_distanciaW_Back;
        $backing->UM_tiempoW_Back = $request->UM_tiempoW_Back;
        $backing->UM_velocidadW_Back = $request->UM_velocidadW_Back;
        $backing->UM_distanciaF_Back = $request->UM_distanciaF_Back;
        $backing->UM_tiempoF_Back = $request->UM_tiempoF_Back;
        $backing->UM_velocidadF_Back = $request->UM_velocidadF_Back;
        $backing->UM_apari_Back = $request->UM_apari_Back;
        $backing->UM_tono_Back = $request->UM_tono_Back;

        $backing->LSE_peso_Back = $request->LSE_peso_Back;
        $backing->LSE_anchoU_Back = $request->LSE_anchoU_Back;
        $backing->LSE_elongacionW_Back = $request->LSE_elongacionW_Back;
        $backing->LSE_elongacionF_Back = $request->LSE_elongacionF_Back;
        $backing->LSE_rep_Back = $request->LSE_rep_Back;
        $backing->LSE_velcro_Back = $request->LSE_velcro_Back;
        $backing->LSE_croking_Back = $request->LSE_croking_Back;
        $backing->LSE_distanciaW_Back = $request->LSE_distanciaW_Back;
        $backing->LSE_tiempoW_Back = $request->LSE_tiempoW_Back;
        $backing->LSE_velocidadW_Back = $request->LSE_velocidadW_Back;
        $backing->LSE_distanciaF_Back = $request->LSE_distanciaF_Back;
        $backing->LSE_tiempoF_Back = $request->LSE_tiempoF_Back;
        $backing->LSE_velocidadF_Back = $request->LSE_velocidadF_Back;
        $backing->LSE_apari_Back = $request->LSE_apari_Back;
        $backing->LSE_tono_Back = $request->LSE_tono_Back;

        $backing->LIE_peso_Back = $request->LIE_peso_Back;
        $backing->LIE_anchoU_Back = $request->LIE_anchoU_Back;
        $backing->LIE_elongacionW_Back = $request->LIE_elongacionW_Back;
        $backing->LIE_elongacionF_Back = $request->LIE_elongacionF_Back;
        $backing->LIE_rep_Back = $request->LIE_rep_Back;
        $backing->LIE_velcro_Back = $request->LIE_velcro_Back;
        $backing->LIE_croking_Back = $request->LIE_croking_Back;
        $backing->LIE_distanciaW_Back = $request->LIE_distanciaW_Back;
        $backing->LIE_tiempoW_Back = $request->LIE_tiempoW_Back;
        $backing->LIE_velocidadW_Back = $request->LIE_velocidadW_Back;
        $backing->LIE_distanciaF_Back = $request->LIE_distanciaF_Back;
        $backing->LIE_tiempoF_Back = $request->LIE_tiempoF_Back;
        $backing->LIE_velocidadF_Back = $request->LIE_velocidadF_Back;
        $backing->LIE_apari_Back = $request->LIE_apari_Back;
        $backing->LIE_tono_Back = $request->LIE_tono_Back;
        $backing->id_Clien = $request->id_Clien;

        $backing->save();

        return redirect()->route('telasbackings.index');
    }
}
