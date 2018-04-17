<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesotermofijado;
use App\Http\Requests\procesotermofijadoRequest;

class ProcesotermofijadoController extends Controller
{
    public function index()
    {
    	$procesotermo = procesotermofijado::orderBy('id_PTermo','DESC')->paginate();
    	return view('proceso-termo.index',compact('procesotermo'));
    }

    ///

    public function destroy($id_PTermo)
    {
    	$procesoter = procesotermofijado::find($id_PTermo);
    	$procesoter->delete();

    	return back()->with('info', 'Los datos del proceso Termofijado fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-termo.create');
    }

    ///

    public function store(procesotermofijadoRequest $request)
    {
         $procesoter = new procesotermofijado;

        $procesoter->pOrilla_PTermo = $request->pOrilla_PTermo;
        $procesoter->pCentro_PTermo = $request->pCentro_PTermo;
        $procesoter->ppOrilla_PTermo = $request->ppOrilla_PTermo;
        $procesoter->pPromedio_PTermo = $request->pPromedio_PTermo;
        $procesoter->anchoU_PTermo = $request->anchoU_PTermo;
        $procesoter->elongacionW_PTermo = $request->elongacionW_PTermo;
        $procesoter->elongacionF_PTermo = $request->elongacionF_PTermo;
        $procesoter->espesor_PTermo = $request->espesor_PTermo;
        $procesoter->lecColorDL_PTermo = $request->lecColorDL_PTermo;
        $procesoter->lecColorDA_PTermo = $request->lecColorDA_PTermo;
        $procesoter->lecColorDB_PTermo = $request->lecColorDB_PTermo;
        $procesoter->distanciaW_PTermo = $request->distanciaW_PTermo;
        $procesoter->tiempoW_PTermo = $request->tiempoW_PTermo;
        $procesoter->velocidadW_PTermo = $request->velocidadW_PTermo;
        $procesoter->distanciaF_PTermo = $request->distanciaF_PTermo;
        $procesoter->tiempoF_PTermo = $request->tiempoF_PTermo;
        $procesoter->velocidadF_PTermo = $request->velocidadF_PTermo;
        $procesoter->apariencia_PTermo = $request->apariencia_PTermo;
        $procesoter->tono_PTermo = $request->tono_PTermo;
        $procesoter->disposicion_Ptermo = $request->disposicion_Ptermo;
        $procesoter->fechaE_PTermo = $request->fechaE_PTermo;
        $procesoter->horaE_PTermo = $request->horaE_PTermo;
        $procesoter->analista_PTermo = $request->analista_PTermo;
        $procesoter->comentario_PTermo = $request->comentario_PTermo;
        $procesoter->id_Ramas = $request->id_Ramas;

        $procesoter->save();

        return redirect()->route('procesotermofijados.index')
                         ->with('info', 'los datos para del Proceso Termofijado fueron guardados');
    }

    ///

    public function edit($id_PTermo)
    {
        $procesoter = procesotermofijado::find($id_PTermo);
        return view('proceso-termo.edit', compact('procesoter'));
    }

    ///

    public function update(procesotermofijadoRequest $request, $id_PTermo)
    {
        $procesoter = procesotermofijado::find($id_PTermo);

        $procesoter->pOrilla_PTermo = $request->pOrilla_PTermo;
        $procesoter->pCentro_PTermo = $request->pCentro_PTermo;
        $procesoter->ppOrilla_PTermo = $request->ppOrilla_PTermo;
        $procesoter->pPromedio_PTermo = $request->pPromedio_PTermo;
        $procesoter->anchoU_PTermo = $request->anchoU_PTermo;
        $procesoter->elongacionW_PTermo = $request->elongacionW_PTermo;
        $procesoter->elongacionF_PTermo = $request->elongacionF_PTermo;
        $procesoter->espesor_PTermo = $request->espesor_PTermo;
        $procesoter->lecColorDL_PTermo = $request->lecColorDL_PTermo;
        $procesoter->lecColorDA_PTermo = $request->lecColorDA_PTermo;
        $procesoter->lecColorDB_PTermo = $request->lecColorDB_PTermo;
        $procesoter->distanciaW_PTermo = $request->distanciaW_PTermo;
        $procesoter->tiempoW_PTermo = $request->tiempoW_PTermo;
        $procesoter->velocidadW_PTermo = $request->velocidadW_PTermo;
        $procesoter->distanciaF_PTermo = $request->distanciaF_PTermo;
        $procesoter->tiempoF_PTermo = $request->tiempoF_PTermo;
        $procesoter->velocidadF_PTermo = $request->velocidadF_PTermo;
        $procesoter->apariencia_PTermo = $request->apariencia_PTermo;
        $procesoter->tono_PTermo = $request->tono_PTermo;
        $procesoter->disposicion_Ptermo = $request->disposicion_Ptermo;
        $procesoter->fechaE_PTermo = $request->fechaE_PTermo;
        $procesoter->horaE_PTermo = $request->horaE_PTermo;
        $procesoter->analista_PTermo = $request->analista_PTermo;
        $procesoter->comentario_PTermo = $request->comentario_PTermo;
        $procesoter->id_Ramas = $request->id_Ramas;

        $procesoter->save();

        return redirect()->route('procesotermofijados.index')
                         ->with('info', ' Los datos del Proceso Termofijado fueron actualizados');
    }
}
