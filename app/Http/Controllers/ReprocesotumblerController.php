<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesotumbler;
use App\Http\Requests\reprocesotumblerRequest;

class ReprocesotumblerController extends Controller
{
   public function index()
    {
    	$retumb = reprocesotumbler::orderBy('id_ReTum','DESC')->paginate();
    	return view('re-tum.index',compact('retumb'));
    }

    ///

    public function destroy($id_ReTum)
    {
    	$retum = reprocesotumbler::find($id_ReTum);
    	$retum->delete();

    	return back()->with('info', 'Los datos del Re proceso Tumbler fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-tum.create');
    }

    ///

    public function store(reprocesotumblerRequest $request)
    {
         $retum = new reprocesotumbler;

        $retum->pOrilla_ReTum = $request->pOrilla_ReTum;
        $retum->pCentro_ReTum = $request->pCentro_ReTum;
        $retum->ppOrilla_ReTum = $request->ppOrilla_ReTum;
        $retum->pPromedio_ReTum = $request->pPromedio_ReTum;
        $retum->anchoU_ReTum = $request->anchoU_ReTum;
        $retum->eloncacionW_ReTum = $request->eloncacionW_ReTum;
        $retum->eloncacionF_ReTum = $request->eloncacionF_ReTum;
        $retum->apariencia_ReTum = $request->apariencia_ReTum;
        $retum->tono_ReTum = $request->tono_ReTum;
        $retum->disposicion_ReTum = $request->disposicion_ReTum;
        $retum->fechaE_ReTum = $request->fechaE_ReTum;
        $retum->horaE_ReTum = $request->horaE_ReTum;
        $retum->analista_ReTum = $request->analista_ReTum;
        $retum->comentario_ReTum = $request->comentario_ReTum;
        $retum->id_PTum = $request->id_PTum;

        $retum->save();

        return redirect()->route('reprocesotumblers.index')
                         ->with('info', 'los datos para del Re Proceso Tumbler fueron guardados');
    }

    ///

    public function edit($id_ReTum)
    {
        $retum = reprocesotumbler::find($id_ReTum);
        return view('re-tum.edit', compact('retum'));
    }

    ///

    public function update(reprocesotumblerRequest $request, $id_ReTum)
    {
        $retum = reprocesotumbler::find($id_ReTum);

        $retum->pOrilla_ReTum = $request->pOrilla_ReTum;
        $retum->pCentro_ReTum = $request->pCentro_ReTum;
        $retum->ppOrilla_ReTum = $request->ppOrilla_ReTum;
        $retum->pPromedio_ReTum = $request->pPromedio_ReTum;
        $retum->anchoU_ReTum = $request->anchoU_ReTum;
        $retum->eloncacionW_ReTum = $request->eloncacionW_ReTum;
        $retum->eloncacionF_ReTum = $request->eloncacionF_ReTum;
        $retum->apariencia_ReTum = $request->apariencia_ReTum;
        $retum->tono_ReTum = $request->tono_ReTum;
        $retum->disposicion_ReTum = $request->disposicion_ReTum;
        $retum->fechaE_ReTum = $request->fechaE_ReTum;
        $retum->horaE_ReTum = $request->horaE_ReTum;
        $retum->analista_ReTum = $request->analista_ReTum;
        $retum->comentario_ReTum = $request->comentario_ReTum;
        $retum->id_PTum = $request->id_PTum;

        $retum->save();

        return redirect()->route('reprocesotumblers.index')
                         ->with('info', ' Los datos del Re Proceso Tumbler fueron actualizados');
    } 
}
