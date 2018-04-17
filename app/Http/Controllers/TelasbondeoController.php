<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telasbondeo;
use App\Http\Requests\telasbondeoRequest;
use DB;
use App\clientes;

class TelasbondeoController extends Controller
{
    public function index()
    {
   /* 	$bondeos = telasbondeo::orderBy('id_Bondeo','DESC')->paginate();
   */

        $bondeos = DB::table('telasbondeos')
            ->join('clientes', 'telasbondeos.id_Clien', '=', 'clientes.id_Clien')
            ->select('telasbondeos.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-bondeo.index',compact('bondeos'));
    }

    ///

    public function destroy($id_Bondeo)
    {
    	$bondeo = telasbondeo::find($id_Bondeo);
    	$bondeo->delete();

    	return back();
    }

    ///

    public function create()
    {
        $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-bondeo.create', compact('clien'));
    }

    ///

    public function store(telasbondeoRequest $request)
    {
        $bondeo = new telasbondeo;

        $bondeo->Diseño_Bondeo = $request->Diseño_Bondeo;
        $bondeo->color_Bondeo = $request->color_Bondeo;
        $bondeo->OEM_Bondeo = $request->OEM_Bondeo;

        $bondeo->MP_peso_Bondeo = $request->MP_peso_Bondeo;
        $bondeo->MP_espesor_Bondeo = $request->MP_espesor_Bondeo;
        $bondeo->MP_anchoU_Bondeo = $request->MP_anchoU_Bondeo;
        $bondeo->MP_adhesion_Bondeo = $request->MP_adhesion_Bondeo;
        $bondeo->MP_elongacion_Bondeo = $request->MP_elongacion_Bondeo;
        $bondeo->MP_flamabilidad_Bondeo = $request->MP_flamabilidad_Bondeo;
        $bondeo->MP_apariencia_Bondeo = $request->MP_apariencia_Bondeo;
        $bondeo->MP_tono_Bondeo = $request->MP_tono_Bondeo;
        $bondeo->MP_recuperacion_Bondeo = $request->MP_recuperacion_Bondeo;
        $bondeo->MP_lecColor_Bondeo = $request->MP_lecColor_Bondeo;

        $bondeo->UM_peso_Bondeo = $request->UM_peso_Bondeo;
        $bondeo->UM_espesor_Bondeo = $request->UM_espesor_Bondeo;
        $bondeo->UM_anchoU_Bondeo = $request->UM_anchoU_Bondeo;
        $bondeo->UM_adhesion_Bondeo = $request->UM_adhesion_Bondeo;
        $bondeo->UM_elongacion_Bondeo = $request->UM_elongacion_Bondeo;
        $bondeo->UM_distanciaW_Bondeo = $request->UM_distanciaW_Bondeo;
        $bondeo->UM_tiempoW_Bondeo = $request->UM_tiempoW_Bondeo;
        $bondeo->UM_velocidadW_Bondeo = $request->UM_velocidadW_Bondeo;
        $bondeo->UM_distanciaF_Bondeo = $request->UM_distanciaF_Bondeo;
        $bondeo->UM_tiempoF_Bondeo = $request->UM_tiempoF_Bondeo;
        $bondeo->UM_velocidadF_Bondeo = $request->UM_velocidadF_Bondeo;
        $bondeo->UM_apariencia_Bondeo = $request->UM_apariencia_Bondeo;
        $bondeo->UM_tono_Bondeo = $request->UM_tono_Bondeo;
        $bondeo->UM_recuperacion_Bondeo = $request->UM_recuperacion_Bondeo;
        $bondeo->UM_lecColor_Bondeo = $request->UM_lecColordL_Bondeo;

        $bondeo->LSE_peso_Bondeo = $request->LSE_peso_Bondeo;
        $bondeo->LSE_espesor_Bondeo = $request->LSE_espesor_Bondeo;
        $bondeo->LSE_anchoU_Bondeo = $request->LSE_anchoU_Bondeo;
        $bondeo->LSE_adhesionWTU_Bondeo = $request->LSE_adhesionWTU_Bondeo;
        $bondeo->LSE_adhesionFTU_Bondeo = $request->LSE_adhesionFTU_Bondeo;
        $bondeo->LSE_adhesionWSU_Bondeo = $request->LSE_adhesionWSU_Bondeo;
        $bondeo->LSE_adhesionFSU_Bondeo = $request->LSE_adhesionFSU_Bondeo;
        $bondeo->LSE_elongacionW_Bondeo = $request->LSE_elongacionW_Bondeo;
        $bondeo->LSE_elongacionF_Bondeo = $request->LSE_elongacionF_Bondeo;
        $bondeo->LSE_distanciaW_Bondeo = $request->LSE_distanciaW_Bondeo;
        $bondeo->LSE_tiempoW_Bondeo = $request->LSE_tiempoW_Bondeo;
        $bondeo->LSE_velocidadW_Bondeo = $request->LSE_velocidadW_Bondeo;
        $bondeo->LSE_distanciaF_Bondeo = $request->LSE_distanciaF_Bondeo;
        $bondeo->LSE_tiempoF_Bondeo = $request->LSE_tiempoF_Bondeo;
        $bondeo->LSE_velocidadF_Bondeo = $request->LSE_velocidadF_Bondeo;
        $bondeo->LSE_apariencia_Bondeo = $request->LSE_apariencia_Bondeo;
        $bondeo->LSE_tono_Bondeo = $request->LSE_tono_Bondeo;
        $bondeo->LSE_recuperacion_Bondeo = $request->LSE_recuperacion_Bondeo;
        $bondeo->LSE_lecColordL_Bondeo = $request->LSE_lecColordL_Bondeo;
        $bondeo->LSE_lecColorda_Bondeo = $request->LSE_lecColorda_Bondeo;
        $bondeo->LSE_lecColordb_Bondeo = $request->LSE_lecColordb_Bondeo;

        $bondeo->LIE_peso_Bondeo = $request->LIE_peso_Bondeo;
        $bondeo->LIE_espesor_Bondeo = $request->LIE_espesor_Bondeo;
        $bondeo->LIE_anchoU_Bondeo = $request->LIE_anchoU_Bondeo;
        $bondeo->LIE_adhesionWTU_Bondeo = $request->LIE_adhesionWTU_Bondeo;
        $bondeo->LIE_adhesionFTU_Bondeo = $request->LIE_adhesionFTU_Bondeo;
        $bondeo->LIE_adhesionWSU_Bondeo = $request->LIE_adhesionWSU_Bondeo;
        $bondeo->LIE_adhesionFSU_Bondeo = $request->LIE_adhesionFSU_Bondeo;
        $bondeo->LIE_elongacionW_Bondeo = $request->LIE_elongacionW_Bondeo;
        $bondeo->LIE_elongacionF_Bondeo = $request->LIE_elongacionF_Bondeo;
        $bondeo->LIE_distanciaW_Bondeo = $request->LIE_distanciaW_Bondeo;
        $bondeo->LIE_tiempoW_Bondeo = $request->LIE_tiempoW_Bondeo;
        $bondeo->LIE_velocidadW_Bondeo = $request->LIE_velocidadW_Bondeo;
        $bondeo->LIE_distanciaF_Bondeo = $request->LIE_distanciaF_Bondeo;
        $bondeo->LIE_tiempoF_Bondeo = $request->LIE_tiempoF_Bondeo;
        $bondeo->LIE_velocidadF_Bondeo = $request->LIE_velocidadF_Bondeo;
        $bondeo->LIE_apariencia_Bondeo = $request->LIE_apariencia_Bondeo;
        $bondeo->LIE_tono_Bondeo = $request->LIE_tono_Bondeo;
        $bondeo->LIE_recuperacion_Bondeo = $request->LIE_recuperacion_Bondeo;
        $bondeo->LIE_lecColordL_Bondeo = $request->LIE_lecColordL_Bondeo;
        $bondeo->LIE_lecColorda_Bondeo = $request->LIE_lecColorda_Bondeo;
        $bondeo->LIE_lecColordb_Bondeo = $request->LIE_lecColordb_Bondeo;

        $bondeo->id_Clien = $request->id_Clien;
       

        $bondeo->save();

        return redirect()->route('telasbondeos.index');
    }

    ///

    public function edit( $id_Bondeo)
    {
        $bondeo = telasbondeo::find($id_Bondeo);
        //$clien = clientes::find( 'id_Clien');
        $id_Clien = clientes::find('id_Clien');

        $clien = collect(['id_Clien' => 'nombreCliente']);

        $value = $clien->get('nombreCliente');
        //dd($value);
        
        return view('telas-bondeo.edit', compact('bondeo', 'value'));
    }

    ///

    public function update(telasbondeoRequest $request, $id_Bondeo)
    {
        $bondeo = telasbondeo::find($id_Bondeo);

        $bondeo->Diseño_Bondeo = $request->Diseño_Bondeo;
        $bondeo->color_Bondeo = $request->color_Bondeo;
        $bondeo->OEM_Bondeo = $request->OEM_Bondeo;

        $bondeo->MP_peso_Bondeo = $request->MP_peso_Bondeo;
        $bondeo->MP_espesor_Bondeo = $request->MP_espesor_Bondeo;
        $bondeo->MP_anchoU_Bondeo = $request->MP_anchoU_Bondeo;
        $bondeo->MP_adhesion_Bondeo = $request->MP_adhesion_Bondeo;
        $bondeo->MP_elongacion_Bondeo = $request->MP_elongacion_Bondeo;
        $bondeo->MP_flamabilidad_Bondeo = $request->MP_flamabilidad_Bondeo;
        $bondeo->MP_apariencia_Bondeo = $request->MP_apariencia_Bondeo;
        $bondeo->MP_tono_Bondeo = $request->MP_tono_Bondeo;
        $bondeo->MP_recuperacion_Bondeo = $request->MP_recuperacion_Bondeo;
        $bondeo->MP_lecColor_Bondeo = $request->MP_lecColor_Bondeo;

        $bondeo->UM_peso_Bondeo = $request->UM_peso_Bondeo;
        $bondeo->UM_espesor_Bondeo = $request->UM_espesor_Bondeo;
        $bondeo->UM_anchoU_Bondeo = $request->UM_anchoU_Bondeo;
        $bondeo->UM_adhesion_Bondeo = $request->UM_adhesion_Bondeo;
        $bondeo->UM_elongacion_Bondeo = $request->UM_elongacion_Bondeo;
        $bondeo->UM_distanciaW_Bondeo = $request->UM_distanciaW_Bondeo;
        $bondeo->UM_tiempoW_Bondeo = $request->UM_tiempoW_Bondeo;
        $bondeo->UM_velocidadW_Bondeo = $request->UM_velocidadW_Bondeo;
        $bondeo->UM_distanciaF_Bondeo = $request->UM_distanciaF_Bondeo;
        $bondeo->UM_tiempoF_Bondeo = $request->UM_tiempoF_Bondeo;
        $bondeo->UM_velocidadF_Bondeo = $request->UM_velocidadF_Bondeo;
        $bondeo->UM_apariencia_Bondeo = $request->UM_apariencia_Bondeo;
        $bondeo->UM_tono_Bondeo = $request->UM_tono_Bondeo;
        $bondeo->UM_recuperacion_Bondeo = $request->UM_recuperacion_Bondeo;
        $bondeo->UM_lecColor_Bondeo = $request->UM_lecColordL_Bondeo;

        $bondeo->LSE_peso_Bondeo = $request->LSE_peso_Bondeo;
        $bondeo->LSE_espesor_Bondeo = $request->LSE_espesor_Bondeo;
        $bondeo->LSE_anchoU_Bondeo = $request->LSE_anchoU_Bondeo;
        $bondeo->LSE_adhesionWTU_Bondeo = $request->LSE_adhesionWTU_Bondeo;
        $bondeo->LSE_adhesionFTU_Bondeo = $request->LSE_adhesionFTU_Bondeo;
        $bondeo->LSE_adhesionWSU_Bondeo = $request->LSE_adhesionWSU_Bondeo;
        $bondeo->LSE_adhesionFSU_Bondeo = $request->LSE_adhesionFSU_Bondeo;
        $bondeo->LSE_elongacionW_Bondeo = $request->LSE_elongacionW_Bondeo;
        $bondeo->LSE_elongacionF_Bondeo = $request->LSE_elongacionF_Bondeo;
        $bondeo->LSE_distanciaW_Bondeo = $request->LSE_distanciaW_Bondeo;
        $bondeo->LSE_tiempoW_Bondeo = $request->LSE_tiempoW_Bondeo;
        $bondeo->LSE_velocidadW_Bondeo = $request->LSE_velocidadW_Bondeo;
        $bondeo->LSE_distanciaF_Bondeo = $request->LSE_distanciaF_Bondeo;
        $bondeo->LSE_tiempoF_Bondeo = $request->LSE_tiempoF_Bondeo;
        $bondeo->LSE_velocidadF_Bondeo = $request->LSE_velocidadF_Bondeo;
        $bondeo->LSE_apariencia_Bondeo = $request->LSE_apariencia_Bondeo;
        $bondeo->LSE_tono_Bondeo = $request->LSE_tono_Bondeo;
        $bondeo->LSE_recuperacion_Bondeo = $request->LSE_recuperacion_Bondeo;
        $bondeo->LSE_lecColordL_Bondeo = $request->LSE_lecColordL_Bondeo;
        $bondeo->LSE_lecColorda_Bondeo = $request->LSE_lecColorda_Bondeo;
        $bondeo->LSE_lecColordb_Bondeo = $request->LSE_lecColordb_Bondeo;

        $bondeo->LIE_peso_Bondeo = $request->LIE_peso_Bondeo;
        $bondeo->LIE_espesor_Bondeo = $request->LIE_espesor_Bondeo;
        $bondeo->LIE_anchoU_Bondeo = $request->LIE_anchoU_Bondeo;
        $bondeo->LIE_adhesionWTU_Bondeo = $request->LIE_adhesionWTU_Bondeo;
        $bondeo->LIE_adhesionFTU_Bondeo = $request->LIE_adhesionFTU_Bondeo;
        $bondeo->LIE_adhesionWSU_Bondeo = $request->LIE_adhesionWSU_Bondeo;
        $bondeo->LIE_adhesionFSU_Bondeo = $request->LIE_adhesionFSU_Bondeo;
        $bondeo->LIE_elongacionW_Bondeo = $request->LIE_elongacionW_Bondeo;
        $bondeo->LIE_elongacionF_Bondeo = $request->LIE_elongacionF_Bondeo;
        $bondeo->LIE_distanciaW_Bondeo = $request->LIE_distanciaW_Bondeo;
        $bondeo->LIE_tiempoW_Bondeo = $request->LIE_tiempoW_Bondeo;
        $bondeo->LIE_velocidadW_Bondeo = $request->LIE_velocidadW_Bondeo;
        $bondeo->LIE_distanciaF_Bondeo = $request->LIE_distanciaF_Bondeo;
        $bondeo->LIE_tiempoF_Bondeo = $request->LIE_tiempoF_Bondeo;
        $bondeo->LIE_velocidadF_Bondeo = $request->LIE_velocidadF_Bondeo;
        $bondeo->LIE_apariencia_Bondeo = $request->LIE_apariencia_Bondeo;
        $bondeo->LIE_tono_Bondeo = $request->LIE_tono_Bondeo;
        $bondeo->LIE_recuperacion_Bondeo = $request->LIE_recuperacion_Bondeo;
        $bondeo->LIE_lecColordL_Bondeo = $request->LIE_lecColordL_Bondeo;
        $bondeo->LIE_lecColorda_Bondeo = $request->LIE_lecColorda_Bondeo;
        $bondeo->LIE_lecColordb_Bondeo = $request->LIE_lecColordb_Bondeo;

        $bondeo->id_Clien = $request->id_Clien;

        $bondeo->save();

        return redirect()->route('telasbondeos.index');
    }
}
