<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesotumbler;
use App\Http\Requests\procesotumblerRequest;

class ProcesotumblerController extends Controller
{
     public function index()
    {
    	$procesotumb = procesotumbler::orderBy('id_PTum','DESC')->paginate();
    	return view('proceso-tum.index',compact('procesotumb'));
    }

    ///

    public function destroy($id_PTum)
    {
    	$procesotum = procesotumbler::find($id_PTum);
    	$procesotum->delete();

    	return back()->with('info', 'Los datos del proceso Tumbler fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-tum.create');
    }

    ///

    public function store(procesotumblerRequest $request)
    {
         $procesotum = new procesotumbler;

        $procesotum->pOrilla_PTum = $request->pOrilla_PTum;
        $procesotum->pCentro_PTum = $request->pCentro_PTum;
        $procesotum->ppOrilla_PTum = $request->ppOrilla_PTum;
        $procesotum->pPromedio_PTum = $request->pPromedio_PTum;
        $procesotum->anchoU_PTum = $request->anchoU_PTum;
        $procesotum->eloncacionW_PTum = $request->eloncacionW_PTum;
        $procesotum->eloncacionF_PTum = $request->eloncacionF_PTum;
        $procesotum->apariencia_PTum = $request->apariencia_PTum;
        $procesotum->tono_PTum = $request->tono_PTum;
        $procesotum->disposicion_Ptum = $request->disposicion_Ptum;
        $procesotum->fechaE_PTum = $request->fechaE_PTum;
        $procesotum->horaE_PTum = $request->horaE_PTum;
        $procesotum->analista_PTum = $request->analista_PTum;
        $procesotum->comentario_PTum = $request->comentario_PTum;
        $procesotum->id_Ramas = $request->id_Ramas;

        $procesotum->save();

        return redirect()->route('procesotumblers.index')
                         ->with('info', 'los datos para del Proceso Tumbler fueron guardados');
    }

    ///

    public function edit($id_PTum)
    {
        $procesotum = procesotumbler::find($id_PTum);
        return view('proceso-tum.edit', compact('procesotum'));
    }

    ///

    public function update(procesotumblerRequest $request, $id_PTum)
    {
        $procesotum = procesotumbler::find($id_PTum);

        $procesotum->pOrilla_PTum = $request->pOrilla_PTum;
        $procesotum->pCentro_PTum = $request->pCentro_PTum;
        $procesotum->ppOrilla_PTum = $request->ppOrilla_PTum;
        $procesotum->pPromedio_PTum = $request->pPromedio_PTum;
        $procesotum->anchoU_PTum = $request->anchoU_PTum;
        $procesotum->eloncacionW_PTum = $request->eloncacionW_PTum;
        $procesotum->eloncacionF_PTum = $request->eloncacionF_PTum;
        $procesotum->apariencia_PTum = $request->apariencia_PTum;
        $procesotum->tono_PTum = $request->tono_PTum;
        $procesotum->disposicion_Ptum = $request->disposicion_Ptum;
        $procesotum->fechaE_PTum = $request->fechaE_PTum;
        $procesotum->horaE_PTum = $request->horaE_PTum;
        $procesotum->analista_PTum = $request->analista_PTum;
        $procesotum->comentario_PTum = $request->comentario_PTum;
        $procesotum->id_Ramas = $request->id_Ramas;

        $procesotum->save();

        return redirect()->route('procesotumblers.index')
                         ->with('info', ' Los datos del Proceso Tumbler fueron actualizados');
    }
}
