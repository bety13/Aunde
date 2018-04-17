<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesobacking;
use App\Http\Requests\procesobackingRequest;

class ProcesobackingController extends Controller
{
    public function index()
    {
    	$procesobacki = procesobacking::orderBy('id_PBack','DESC')->paginate();
    	return view('proceso-back.index',compact('procesobacki'));
    }

    ///

    public function destroy($id_PBack)
    {
    	$procesoback = procesobacking::find($id_PBack);
    	$procesoback->delete();

    	return back()->with('info', 'Los datos del proceso Backing fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-back.create');
    }

    ///

    public function store(procesobackingRequest $request)
    {
         $procesoback = new procesobacking;

        $procesoback->pOrilla_PBack = $request->pOrilla_PBack;
        $procesoback->pCentro_PBack = $request->pCentro_PBack;
        $procesoback->ppOrilla_PBack = $request->ppOrilla_PBack;
        $procesoback->pPromedio_PBack = $request->pPromedio_PBack;
        $procesoback->anchoU_PBack = $request->anchoU_PBack;
        $procesoback->elongacionW_PBack = $request->elongacionW_PBack;
        $procesoback->elongacionF_PBack = $request->elongacionF_PBack;
        $procesoback->repelente_PBack = $request->repelente_PBack;
        $procesoback->velcro_PBack = $request->velcro_PBack;
        $procesoback->croking_PBack = $request->croking_PBack;
        $procesoback->distanciaW_PBack = $request->distanciaW_PBack;
        $procesoback->tiempoW_PBack = $request->tiempoW_PBack;
        $procesoback->velocidadW_PBack = $request->velocidadW_PBack;
        $procesoback->distanciaF_PBack = $request->distanciaF_PBack;
        $procesoback->tiempoF_PBack = $request->tiempoF_PBack;
        $procesoback->velocidadF_PBack = $request->velocidadF_PBack;
        $procesoback->apariencia_PBack = $request->apariencia_PBack;
        $procesoback->tono_PBack = $request->tono_PBack;
        $procesoback->disposicion_PBack = $request->disposicion_PBack;
        $procesoback->fechaE_PBack = $request->fechaE_PBack;
        $procesoback->horaE_PBack = $request->horaE_PBack;
        $procesoback->analista_PBack = $request->analista_PBack;
        $procesoback->comentario_PBack = $request->comentario_PBack;
        $procesoback->id_Ramas = $request->id_Ramas;

        $procesoback->save();

        return redirect()->route('procesobackings.index')
                         ->with('info', 'los datos para del Proceso Backing fueron guardados');
    }

    ///

    public function edit($id_PBack)
    {
        $procesoback = procesobacking::find($id_PBack);
        return view('proceso-back.edit', compact('procesoback'));
    }

    ///

    public function update(procesobackingRequest $request, $id_PBack)
    {
        $procesoback = procesobacking::find($id_PBack);

        $procesoback->pOrilla_PBack = $request->pOrilla_PBack;
        $procesoback->pCentro_PBack = $request->pCentro_PBack;
        $procesoback->ppOrilla_PBack = $request->ppOrilla_PBack;
        $procesoback->pPromedio_PBack = $request->pPromedio_PBack;
        $procesoback->anchoU_PBack = $request->anchoU_PBack;
        $procesoback->elongacionW_PBack = $request->elongacionW_PBack;
        $procesoback->elongacionF_PBack = $request->elongacionF_PBack;
        $procesoback->repelente_PBack = $request->repelente_PBack;
        $procesoback->velcro_PBack = $request->velcro_PBack;
        $procesoback->croking_PBack = $request->croking_PBack;
        $procesoback->distanciaW_PBack = $request->distanciaW_PBack;
        $procesoback->tiempoW_PBack = $request->tiempoW_PBack;
        $procesoback->velocidadW_PBack = $request->velocidadW_PBack;
        $procesoback->distanciaF_PBack = $request->distanciaF_PBack;
        $procesoback->tiempoF_PBack = $request->tiempoF_PBack;
        $procesoback->velocidadF_PBack = $request->velocidadF_PBack;
        $procesoback->apariencia_PBack = $request->apariencia_PBack;
        $procesoback->tono_PBack = $request->tono_PBack;
        $procesoback->disposicion_PBack = $request->disposicion_PBack;
        $procesoback->fechaE_PBack = $request->fechaE_PBack;
        $procesoback->horaE_PBack = $request->horaE_PBack;
        $procesoback->analista_PBack = $request->analista_PBack;
        $procesoback->comentario_PBack = $request->comentario_PBack;
        $procesoback->id_Ramas = $request->id_Ramas;

        $procesoback->save();

        return redirect()->route('procesobackings.index')
                         ->with('info', ' Los datos del Proceso Backing fueron actualizados');
    }
}
