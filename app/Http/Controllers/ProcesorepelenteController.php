<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesorepelente;
use App\Http\Requests\procesorepelenteRequest;

class ProcesorepelenteController extends Controller
{
    public function index()
    {
    	$procesorepe = procesorepelente::orderBy('id_PRep','DESC')->paginate();
    	return view('proceso-rep.index',compact('procesorepe'));
    }

    ///

    public function destroy($id_PRep)
    {
    	$procesorep = procesorepelente::find($id_PRep);
    	$procesorep->delete();

    	return back()->with('info', 'Los datos del proceso Repelente fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-rep.create');
    }

    ///

    public function store(procesorepelenteRequest $request)
    {
         $procesorep = new procesorepelente;

        $procesorep->pOrilla_PRep = $request->pOrilla_PRep;
        $procesorep->pCentro_PRep = $request->pCentro_PRep;
        $procesorep->ppOrilla_PRep = $request->ppOrilla_PRep;
        $procesorep->pPromedio_PRep = $request->pPromedio_PRep;
        $procesorep->anchoU_PRep = $request->anchoU_PRep;
        $procesorep->elongacionW_PRep = $request->elongacionW_PRep;
        $procesorep->elongacionF_PRep = $request->elongacionF_PRep;
        $procesorep->repelente_PRep = $request->repelente_PRep;
        $procesorep->velcro_PRep = $request->velcro_PRep;
        $procesorep->croking_PRep = $request->croking_PRep;
        $procesorep->distanciaW_PRep = $request->distanciaW_PRep;
        $procesorep->tiempoW_PRep = $request->tiempoW_PRep;
        $procesorep->velocidadW_PRep = $request->velocidadW_PRep;
        $procesorep->distanciaF_PRep = $request->distanciaF_PRep;
        $procesorep->tiempoF_PRep = $request->tiempoF_PRep;
        $procesorep->velocidadF_PRep = $request->velocidadF_PRep;
        $procesorep->apariencia_PRep = $request->apariencia_PRep;
        $procesorep->tono_PRep = $request->tono_PRep;
        $procesorep->disposicion_PRep = $request->disposicion_PRep;
        $procesorep->fechaE_PRep = $request->fechaE_PRep;
        $procesorep->horaE_PRep = $request->horaE_PRep;
        $procesorep->analista_PRep = $request->analista_PRep;
        $procesorep->comentario_PRep = $request->comentario_PRep;
        $procesorep->id_Ramas = $request->id_Ramas;

        $procesorep->save();

        return redirect()->route('procesorepelentes.index')
                         ->with('info', 'los datos para del Proceso Repelente fueron guardados');
    }

    ///

    public function edit($id_PRep)
    {
        $procesorep = procesorepelente::find($id_PRep);
        return view('proceso-rep.edit', compact('procesorep'));
    }

    ///

    public function update(procesorepelenteRequest $request, $id_PRep)
    {
        $procesorep = procesorepelente::find($id_PRep);

        $procesorep->pOrilla_PRep = $request->pOrilla_PRep;
        $procesorep->pCentro_PRep = $request->pCentro_PRep;
        $procesorep->ppOrilla_PRep = $request->ppOrilla_PRep;
        $procesorep->pPromedio_PRep = $request->pPromedio_PRep;
        $procesorep->anchoU_PRep = $request->anchoU_PRep;
        $procesorep->elongacionW_PRep = $request->elongacionW_PRep;
        $procesorep->elongacionF_PRep = $request->elongacionF_PRep;
        $procesorep->repelente_PRep = $request->repelente_PRep;
        $procesorep->velcro_PRep = $request->velcro_PRep;
        $procesorep->croking_PRep = $request->croking_PRep;
        $procesorep->distanciaW_PRep = $request->distanciaW_PRep;
        $procesorep->tiempoW_PRep = $request->tiempoW_PRep;
        $procesorep->velocidadW_PRep = $request->velocidadW_PRep;
        $procesorep->distanciaF_PRep = $request->distanciaF_PRep;
        $procesorep->tiempoF_PRep = $request->tiempoF_PRep;
        $procesorep->velocidadF_PRep = $request->velocidadF_PRep;
        $procesorep->apariencia_PRep = $request->apariencia_PRep;
        $procesorep->tono_PRep = $request->tono_PRep;
        $procesorep->disposicion_PRep = $request->disposicion_PRep;
        $procesorep->fechaE_PRep = $request->fechaE_PRep;
        $procesorep->horaE_PRep = $request->horaE_PRep;
        $procesorep->analista_PRep = $request->analista_PRep;
        $procesorep->comentario_PRep = $request->comentario_PRep;
        $procesorep->id_Ramas = $request->id_Ramas;

        $procesorep->save();

        return redirect()->route('procesorepelentes.index')
                         ->with('info', ' Los datos del Proceso Repelente fueron actualizados');
    }
}
