<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesobondeo;
use App\Http\Requests\procesobondeoRequest;

class ProcesobondeoController extends Controller
{
    public function index()
    {
    	$procesobond = procesobondeo::orderBy('id_PBondeo','DESC')->paginate();
    	return view('proceso-bon.index',compact('procesobond'));
    }

    ///

    public function destroy($id_PBondeo)
    {
    	$procesobon = procesobondeo::find($id_PBondeo);
    	$procesobon->delete();

    	return back()->with('info', 'Los datos del proceso Bondeo fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-bon.create');
    }

    ///

    public function store(procesobondeoRequest $request)
    {
         $procesobon = new procesobondeo;

        $procesobon->peso1_PBondeo = $request->peso1_PBondeo;
        $procesobon->peso2_PBondeo = $request->peso2_PBondeo;
        $procesobon->peso3_PBondeo = $request->peso3_PBondeo;
        $procesobon->pesoProm_PBondeo = $request->pesoProm_PBondeo;
        $procesobon->espesor1_PBondeo = $request->espesor1_PBondeo;
        $procesobon->espesor2_PBondeo = $request->espesor2_PBondeo;
        $procesobon->espesor3_PBondeo = $request->espesor3_PBondeo;
        $procesobon->espesorProm_PBondeo = $request->espesorProm_PBondeo;
        $procesobon->anchoUtil_PBondeo = $request->anchoUtil_PBondeo;
        $procesobon->adhesionWTU_PBondeo = $request->adhesionWTU_PBondeo;
        $procesobon->adhesionFTU_PBondeo = $request->adhesionFTU_PBondeo;
        $procesobon->adhesionWUS_PBondeo = $request->adhesionWUS_PBondeo;
        $procesobon->adhesionFUS_PBondeo = $request->adhesionFUS_PBondeo;
        $procesobon->elongacionW_PBondeo = $request->elongacionW_PBondeo;
        $procesobon->elongacionF_PBondeo = $request->elongacionF_PBondeo;
        $procesobon->distanciaW_PBondeo = $request->distanciaW_PBondeo;
        $procesobon->tiempoW_PBondeo = $request->tiempoW_PBondeo;
        $procesobon->velocidadW_PBondeo = $request->velocidadW_PBondeo;
        $procesobon->distanciaF_PBondeo = $request->distanciaF_PBondeo;
        $procesobon->tiempoF_PBondeo = $request->tiempoF_PBondeo;
        $procesobon->velocidadF_PBondeo = $request->velocidadF_PBondeo;
        $procesobon->apariencia_PBondeo = $request->apariencia_PBondeo;
        $procesobon->tono_PBondeo = $request->tono_PBondeo;
        $procesobon->recuperacionW_PBondeo = $request->recuperacionW_PBondeo;
        $procesobon->recuperacionF_PBondeo = $request->recuperacionF_PBondeo;
        $procesobon->lecColorDL_PBondeo = $request->lecColorDL_PBondeo;
        $procesobon->lecColorDA_PBondeo = $request->lecColorDA_PBondeo;
        $procesobon->lecColorDB_PBondeo = $request->lecColorDB_PBondeo;
        $procesobon->disposicion_PBondeo = $request->disposicion_PBondeo;
        $procesobon->fechaE_PBondeo = $request->fechaE_PBondeo;
        $procesobon->horaE_PBondeo = $request->horaE_PBondeo;
        $procesobon->analista_PBondeo = $request->analista_PBondeo;
        $procesobon->comentario_PBondeo = $request->comentario_PBondeo;
        $procesobon->id_Procesos = $request->id_Procesos;

        $procesobon->save();

        return redirect()->route('procesobondeos.index')
                         ->with('info', 'los datos para del Proceso Bondeo fueron guardados');
    }

    ///

    public function edit($id_PBondeo)
    {
        $procesobon = procesobondeo::find($id_PBondeo);
        return view('proceso-bon.edit', compact('procesobon'));
    }

    ///

    public function update(procesobondeoRequest $request, $id_PBondeo)
    {
        $procesobon = procesobondeo::find($id_PBondeo);

        $procesobon->peso1_PBondeo = $request->peso1_PBondeo;
        $procesobon->peso2_PBondeo = $request->peso2_PBondeo;
        $procesobon->peso3_PBondeo = $request->peso3_PBondeo;
        $procesobon->pesoProm_PBondeo = $request->pesoProm_PBondeo;
        $procesobon->espesor1_PBondeo = $request->espesor1_PBondeo;
        $procesobon->espesor2_PBondeo = $request->espesor2_PBondeo;
        $procesobon->espesor3_PBondeo = $request->espesor3_PBondeo;
        $procesobon->espesorProm_PBondeo = $request->espesorProm_PBondeo;
        $procesobon->anchoUtil_PBondeo = $request->anchoUtil_PBondeo;
        $procesobon->adhesionWTU_PBondeo = $request->adhesionWTU_PBondeo;
        $procesobon->adhesionFTU_PBondeo = $request->adhesionFTU_PBondeo;
        $procesobon->adhesionWUS_PBondeo = $request->adhesionWUS_PBondeo;
        $procesobon->adhesionFUS_PBondeo = $request->adhesionFUS_PBondeo;
        $procesobon->elongacionW_PBondeo = $request->elongacionW_PBondeo;
        $procesobon->elongacionF_PBondeo = $request->elongacionF_PBondeo;
        $procesobon->distanciaW_PBondeo = $request->distanciaW_PBondeo;
        $procesobon->tiempoW_PBondeo = $request->tiempoW_PBondeo;
        $procesobon->velocidadW_PBondeo = $request->velocidadW_PBondeo;
        $procesobon->distanciaF_PBondeo = $request->distanciaF_PBondeo;
        $procesobon->tiempoF_PBondeo = $request->tiempoF_PBondeo;
        $procesobon->velocidadF_PBondeo = $request->velocidadF_PBondeo;
        $procesobon->apariencia_PBondeo = $request->apariencia_PBondeo;
        $procesobon->tono_PBondeo = $request->tono_PBondeo;
        $procesobon->recuperacionW_PBondeo = $request->recuperacionW_PBondeo;
        $procesobon->recuperacionF_PBondeo = $request->recuperacionF_PBondeo;
        $procesobon->lecColorDL_PBondeo = $request->lecColorDL_PBondeo;
        $procesobon->lecColorDA_PBondeo = $request->lecColorDA_PBondeo;
        $procesobon->lecColorDB_PBondeo = $request->lecColorDB_PBondeo;
        $procesobon->disposicion_PBondeo = $request->disposicion_PBondeo;
        $procesobon->fechaE_PBondeo = $request->fechaE_PBondeo;
        $procesobon->horaE_PBondeo = $request->horaE_PBondeo;
        $procesobon->analista_PBondeo = $request->analista_PBondeo;
        $procesobon->comentario_PBondeo = $request->comentario_PBondeo;
        $procesobon->id_Procesos = $request->id_Procesos;

        $procesobon->save();

        return redirect()->route('procesobondeos.index')
                         ->with('info', ' Los datos del Proceso Bondeo fueron actualizados');
    }
}
