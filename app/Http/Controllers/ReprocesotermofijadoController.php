<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesotermofijado;
use App\Http\Requests\reprocesotermofijadoRequest;

class ReprocesotermofijadoController extends Controller
{
    public function index()
    {
    	$retermos = reprocesotermofijado::orderBy('id_ReTermo','DESC')->paginate();
    	return view('re-termo.index',compact('retermos'));
    }

    ///

    public function destroy($id_ReTermo)
    {
    	$retermo = reprocesotermofijado::find($id_ReTermo);
    	$retermo->delete();

    	return back()->with('info', 'Los datos del Re proceso Termofijado fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-termo.create');
    }

    ///

    public function store(reprocesotermofijadoRequest $request)
    {
         $retermo = new reprocesotermofijado;

        $retermo->pOrilla_ReTermo = $request->pOrilla_ReTermo;
        $retermo->pCentro_ReTermo = $request->pCentro_ReTermo;
        $retermo->ppOrilla_ReTermo = $request->ppOrilla_ReTermo;
        $retermo->pPromedio_ReTermo = $request->pPromedio_ReTermo;
        $retermo->anchoU_ReTermo = $request->anchoU_ReTermo;
        $retermo->elongacionW_ReTermo = $request->elongacionW_ReTermo;
        $retermo->elongacionF_ReTermo = $request->elongacionF_ReTermo;
        $retermo->espesor_ReTermo = $request->espesor_ReTermo;
        $retermo->lecColorDL_ReTermo = $request->lecColorDL_ReTermo;
        $retermo->lecColorDA_ReTermo = $request->lecColorDA_ReTermo;
        $retermo->lecColorDB_ReTermo = $request->lecColorDB_ReTermo;
        $retermo->distanciaW_ReTermo = $request->distanciaW_ReTermo;
        $retermo->tiempoW_ReTermo = $request->tiempoW_ReTermo;
        $retermo->velocidadW_ReTermo = $request->velocidadW_ReTermo;
        $retermo->distanciaF_ReTermo = $request->distanciaF_ReTermo;
        $retermo->tiempoF_ReTermo = $request->tiempoF_ReTermo;
        $retermo->velocidadF_ReTermo = $request->velocidadF_ReTermo;
        $retermo->apariencia_ReTermo = $request->apariencia_ReTermo;
        $retermo->tono_ReTermo = $request->tono_ReTermo;
        $retermo->disposicion_ReTermo = $request->disposicion_ReTermo;
        $retermo->fechaE_ReTermo = $request->fechaE_ReTermo;
        $retermo->horaE_ReTermo = $request->horaE_ReTermo;
        $retermo->analista_ReTermo = $request->analista_ReTermo;
        $retermo->comentario_ReTermo = $request->comentario_ReTermo;
        $retermo->id_PTermo = $request->id_PTermo;

        $retermo->save();

        return redirect()->route('reprocesotermofijados.index')
                         ->with('info', 'los datos para del ReProceso Termofijado fueron guardados');
    }

    ///

    public function edit($id_ReTermo)
    {
        $retermo = reprocesotermofijado::find($id_ReTermo);
        return view('re-termo.edit', compact('retermo'));
    }

    ///

    public function update(reprocesotermofijadoRequest $request, $id_ReTermo)
    {
        $retermo = reprocesotermofijado::find($id_ReTermo);

        $retermo->pOrilla_ReTermo = $request->pOrilla_ReTermo;
        $retermo->pCentro_ReTermo = $request->pCentro_ReTermo;
        $retermo->ppOrilla_ReTermo = $request->ppOrilla_ReTermo;
        $retermo->pPromedio_ReTermo = $request->pPromedio_ReTermo;
        $retermo->anchoU_ReTermo = $request->anchoU_ReTermo;
        $retermo->elongacionW_ReTermo = $request->elongacionW_ReTermo;
        $retermo->elongacionF_ReTermo = $request->elongacionF_ReTermo;
        $retermo->espesor_ReTermo = $request->espesor_ReTermo;
        $retermo->lecColorDL_ReTermo = $request->lecColorDL_ReTermo;
        $retermo->lecColorDA_ReTermo = $request->lecColorDA_ReTermo;
        $retermo->lecColorDB_ReTermo = $request->lecColorDB_ReTermo;
        $retermo->distanciaW_ReTermo = $request->distanciaW_ReTermo;
        $retermo->tiempoW_ReTermo = $request->tiempoW_ReTermo;
        $retermo->velocidadW_ReTermo = $request->velocidadW_ReTermo;
        $retermo->distanciaF_ReTermo = $request->distanciaF_ReTermo;
        $retermo->tiempoF_ReTermo = $request->tiempoF_ReTermo;
        $retermo->velocidadF_ReTermo = $request->velocidadF_ReTermo;
        $retermo->apariencia_ReTermo = $request->apariencia_ReTermo;
        $retermo->tono_ReTermo = $request->tono_ReTermo;
        $retermo->disposicion_ReTermo = $request->disposicion_ReTermo;
        $retermo->fechaE_ReTermo = $request->fechaE_ReTermo;
        $retermo->horaE_ReTermo = $request->horaE_ReTermo;
        $retermo->analista_ReTermo = $request->analista_ReTermo;
        $retermo->comentario_ReTermo = $request->comentario_ReTermo;
        $retermo->id_PTermo = $request->id_PTermo;

        $retermo->save();

        return redirect()->route('reprocesotermofijados.index')
                         ->with('info', ' Los datos del ReProceso Termofijado fueron actualizados');
    }
}
