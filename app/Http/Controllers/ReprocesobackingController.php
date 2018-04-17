<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesobacking;
use App\Http\Requests\reprocesobackingRequest;

class ReprocesobackingController extends Controller
{
    public function index()
    {
    	$rebacki = reprocesobacking::orderBy('id_ReBack','DESC')->paginate();
    	return view('re-back.index',compact('rebacki'));
    }

    ///

    public function destroy($id_ReBack)
    {
    	$reback = reprocesobacking::find($id_ReBack);
    	$reback->delete();

    	return back()->with('info', 'Los datos del proceso Re Backing fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-back.create');
    }

    ///

    public function store(reprocesobackingRequest $request)
    {
         $reback = new reprocesobacking;

        $reback->pOrilla_ReBack = $request->pOrilla_ReBack;
        $reback->pCentro_ReBack = $request->pCentro_ReBack;
        $reback->ppOrilla_ReBack = $request->ppOrilla_ReBack;
        $reback->pPromedio_ReBack = $request->pPromedio_ReBack;
        $reback->anchoU_ReBack = $request->anchoU_ReBack;
        $reback->elongacionW_ReBack = $request->elongacionW_ReBack;
        $reback->elongacionF_ReBack = $request->elongacionF_ReBack;
        $reback->repelente_ReBack = $request->repelente_ReBack;
        $reback->velcro_ReBack = $request->velcro_ReBack;
        $reback->croking_ReBack = $request->croking_ReBack;
        $reback->distanciaW_ReBack = $request->distanciaW_ReBack;
        $reback->tiempoW_ReBack = $request->tiempoW_ReBack;
        $reback->velocidadW_ReBack = $request->velocidadW_ReBack;
        $reback->distanciaF_ReBack = $request->distanciaF_ReBack;
        $reback->tiempoF_ReBack = $request->tiempoF_ReBack;
        $reback->velocidadF_ReBack = $request->velocidadF_ReBack;
        $reback->apariencia_ReBack = $request->apariencia_ReBack;
        $reback->tono_ReBack = $request->tono_ReBack;
        $reback->disposicion_ReBack = $request->disposicion_ReBack;
        $reback->fechaE_ReBack = $request->fechaE_ReBack;
        $reback->horaE_ReBack = $request->horaE_ReBack;
        $reback->analista_ReBack = $request->analista_ReBack;
        $reback->comentario_ReBack = $request->comentario_ReBack;
        $reback->id_PBack = $request->id_PBack;

        $reback->save();

        return redirect()->route('reprocesobackings.index')
                         ->with('info', 'los datos para del Re Proceso Backing fueron guardados');
    }

    ///

    public function edit($id_ReBack)
    {
        $reback = reprocesobacking::find($id_ReBack);
        return view('re-back.edit', compact('reback'));
    }

    ///

    public function update(reprocesobackingRequest $request, $id_ReBack)
    {
        $reback = reprocesobacking::find($id_ReBack);

        $reback->pOrilla_ReBack = $request->pOrilla_ReBack;
        $reback->pCentro_ReBack = $request->pCentro_ReBack;
        $reback->ppOrilla_ReBack = $request->ppOrilla_ReBack;
        $reback->pPromedio_ReBack = $request->pPromedio_ReBack;
        $reback->anchoU_ReBack = $request->anchoU_ReBack;
        $reback->elongacionW_ReBack = $request->elongacionW_ReBack;
        $reback->elongacionF_ReBack = $request->elongacionF_ReBack;
        $reback->repelente_ReBack = $request->repelente_ReBack;
        $reback->velcro_ReBack = $request->velcro_ReBack;
        $reback->croking_ReBack = $request->croking_ReBack;
        $reback->distanciaW_ReBack = $request->distanciaW_ReBack;
        $reback->tiempoW_ReBack = $request->tiempoW_ReBack;
        $reback->velocidadW_ReBack = $request->velocidadW_ReBack;
        $reback->distanciaF_ReBack = $request->distanciaF_ReBack;
        $reback->tiempoF_ReBack = $request->tiempoF_ReBack;
        $reback->velocidadF_ReBack = $request->velocidadF_ReBack;
        $reback->apariencia_ReBack = $request->apariencia_ReBack;
        $reback->tono_ReBack = $request->tono_ReBack;
        $reback->disposicion_ReBack = $request->disposicion_ReBack;
        $reback->fechaE_ReBack = $request->fechaE_ReBack;
        $reback->horaE_ReBack = $request->horaE_ReBack;
        $reback->analista_ReBack = $request->analista_ReBack;
        $reback->comentario_ReBack = $request->comentario_ReBack;
        $reback->id_PBack = $request->id_PBack;

        $reback->save();

        return redirect()->route('reprocesobackings.index')
                         ->with('info', ' Los datos del Re Proceso Backing fueron actualizados');
    }
}
