<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesorepelente;
use App\Http\Requests\reprocesorepelenteRequest;

class ReprocesorepelenteController extends Controller
{
    public function index()
    {
    	$repel = reprocesorepelente::orderBy('id_ReRep','DESC')->paginate();
    	return view('re-rep.index',compact('repel'));
    }

    ///

    public function destroy($id_ReRep)
    {
    	$repe = reprocesorepelente::find($id_ReRep);
    	$repe->delete();

    	return back()->with('info', 'Los datos del Re proceso Repelente fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-rep.create');
    }

    ///

    public function store(reprocesorepelenteRequest $request)
    {
         $repe = new reprocesorepelente;

        $repe->pOrilla_ReRep = $request->pOrilla_ReRep;
        $repe->pCentro_ReRep = $request->pCentro_ReRep;
        $repe->ppOrilla_ReRep = $request->ppOrilla_ReRep;
        $repe->pPromedio_ReRep = $request->pPromedio_ReRep;
        $repe->anchoU_ReRep = $request->anchoU_ReRep;
        $repe->elongacionW_ReRep = $request->elongacionW_ReRep;
        $repe->elongacionF_ReRep = $request->elongacionF_ReRep;
        $repe->repelente_ReRep = $request->repelente_ReRep;
        $repe->velcro_ReRep = $request->velcro_ReRep;
        $repe->croking_ReRep = $request->croking_ReRep;
        $repe->distanciaW_ReRep = $request->distanciaW_ReRep;
        $repe->tiempoW_ReRep = $request->tiempoW_ReRep;
        $repe->velocidadW_ReRep = $request->velocidadW_ReRep;
        $repe->distanciaF_ReRep = $request->distanciaF_ReRep;
        $repe->tiempoF_ReRep = $request->tiempoF_ReRep;
        $repe->velocidadF_ReRep = $request->velocidadF_ReRep;
        $repe->apariencia_ReRep = $request->apariencia_ReRep;
        $repe->tono_ReRep = $request->tono_ReRep;
        $repe->disposicion_ReRep = $request->disposicion_ReRep;
        $repe->fechaE_ReRep = $request->fechaE_ReRep;
        $repe->horaE_ReRep = $request->horaE_ReRep;
        $repe->analista_ReRep = $request->analista_ReRep;
        $repe->comentario_ReRep = $request->comentario_ReRep;
        $repe->id_PRep = $request->id_PRep;

        $repe->save();

        return redirect()->route('reprocesorepelentes.index')
                         ->with('info', 'los datos para del Re Proceso Repelente fueron guardados');
    }

    ///

    public function edit($id_ReRep)
    {
        $repe = reprocesorepelente::find($id_ReRep);
        return view('re-rep.edit', compact('repe'));
    }

    ///

    public function update(reprocesorepelenteRequest $request, $id_ReRep)
    {
        $repe = reprocesorepelente::find($id_ReRep);

        $repe->pOrilla_ReRep = $request->pOrilla_ReRep;
        $repe->pCentro_ReRep = $request->pCentro_ReRep;
        $repe->ppOrilla_ReRep = $request->ppOrilla_ReRep;
        $repe->pPromedio_ReRep = $request->pPromedio_ReRep;
        $repe->anchoU_ReRep = $request->anchoU_ReRep;
        $repe->elongacionW_ReRep = $request->elongacionW_ReRep;
        $repe->elongacionF_ReRep = $request->elongacionF_ReRep;
        $repe->repelente_ReRep = $request->repelente_ReRep;
        $repe->velcro_ReRep = $request->velcro_ReRep;
        $repe->croking_ReRep = $request->croking_ReRep;
        $repe->distanciaW_ReRep = $request->distanciaW_ReRep;
        $repe->tiempoW_ReRep = $request->tiempoW_ReRep;
        $repe->velocidadW_ReRep = $request->velocidadW_ReRep;
        $repe->distanciaF_ReRep = $request->distanciaF_ReRep;
        $repe->tiempoF_ReRep = $request->tiempoF_ReRep;
        $repe->velocidadF_ReRep = $request->velocidadF_ReRep;
        $repe->apariencia_ReRep = $request->apariencia_ReRep;
        $repe->tono_ReRep = $request->tono_ReRep;
        $repe->disposicion_ReRep = $request->disposicion_ReRep;
        $repe->fechaE_ReRep = $request->fechaE_ReRep;
        $repe->horaE_ReRep = $request->horaE_ReRep;
        $repe->analista_ReRep = $request->analista_ReRep;
        $repe->comentario_ReRep = $request->comentario_ReRep;
        $repe->id_PRep = $request->id_PRep;

        $repe->save();

        return redirect()->route('reprocesorepelentes.index')
                         ->with('info', ' Los datos del Re Proceso Repelente fueron actualizados');
    }
}
