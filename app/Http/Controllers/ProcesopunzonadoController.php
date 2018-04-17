<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesopunzonado;
use App\Http\Requests\procesopunzonadoRequest;

class ProcesopunzonadoController extends Controller
{
    public function index()
    {
    	$procesopunzo = procesopunzonado::orderBy('id_PPunzo','DESC')->paginate();
    	return view('proceso-pun.index',compact('procesopunzo'));
    }

    ///

    public function destroy($id_PPunzo)
    {
    	$procesopun = procesopunzonado::find($id_PPunzo);
    	$procesopun->delete();

    	return back()->with('info', 'Los datos del proceso Punzonado fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-pun.create');
    }

    ///

    public function store(procesopunzonadoRequest $request)
    {
         $procesopun = new procesopunzonado;

        $procesopun->pOrilla_PPunzo = $request->pOrilla_PPunzo;
        $procesopun->pCentro_PPunzo = $request->pCentro_PPunzo;
        $procesopun->ppOrilla_PPunzo = $request->ppOrilla_PPunzo;
        $procesopun->pPromedio_PPunzo = $request->pPromedio_PPunzo;
        $procesopun->anchoU_PPunzo = $request->anchoU_PPunzo;
        $procesopun->apariencia_PPunzo = $request->apariencia_PPunzo;
        $procesopun->disposicion_PPunzo = $request->disposicion_PPunzo;
        $procesopun->fechaE_PPunzo = $request->fechaE_PPunzo;
        $procesopun->horaE_PPunzo = $request->horaE_PPunzo;
        $procesopun->analista_PPunzo = $request->analista_PPunzo;
        $procesopun->comentario_PPunzo = $request->comentario_PPunzo;
        $procesopun->id_Ramas = $request->id_Ramas;

        $procesopun->save();

        return redirect()->route('procesopunzonados.index')
                         ->with('info', 'los datos para del Proceso Punzonado fueron guardados');
    }

    ///

    public function edit($id_PPunzo)
    {
        $procesopun = procesopunzonado::find($id_PPunzo);
        return view('proceso-pun.edit', compact('procesopun'));
    }

    ///

    public function update(procesopunzonadoRequest $request, $id_PPunzo)
    {
        $procesopun = procesopunzonado::find($id_PPunzo);

        $procesopun->pOrilla_PPunzo = $request->pOrilla_PPunzo;
        $procesopun->pCentro_PPunzo = $request->pCentro_PPunzo;
        $procesopun->ppOrilla_PPunzo = $request->ppOrilla_PPunzo;
        $procesopun->pPromedio_PPunzo = $request->pPromedio_PPunzo;
        $procesopun->anchoU_PPunzo = $request->anchoU_PPunzo;
        $procesopun->apariencia_PPunzo = $request->apariencia_PPunzo;
        $procesopun->disposicion_PPunzo = $request->disposicion_PPunzo;
        $procesopun->fechaE_PPunzo = $request->fechaE_PPunzo;
        $procesopun->horaE_PPunzo = $request->horaE_PPunzo;
        $procesopun->analista_PPunzo = $request->analista_PPunzo;
        $procesopun->comentario_PPunzo = $request->comentario_PPunzo;
        $procesopun->id_Ramas = $request->id_Ramas;

        $procesopun->save();

        return redirect()->route('procesopunzonados.index')
                         ->with('info', ' Los datos del Proceso Punzonado fueron actualizados');
    }
}
