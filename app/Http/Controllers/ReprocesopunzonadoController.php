<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesopunzonado;
use App\Http\Requests\reprocesopunzonadoRequest;

class ReprocesopunzonadoController extends Controller
{
     public function index()
    {
    	$repunzo = reprocesopunzonado::orderBy('id_RePunzo','DESC')->paginate();
    	return view('re-pun.index',compact('repunzo'));
    }

    ///

    public function destroy($id_RePunzo)
    {
    	$repun = reprocesopunzonado::find($id_RePunzo);
    	$repun->delete();

    	return back()->with('info', 'Los datos del Re proceso Punzonado fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-pun.create');
    }

    ///

    public function store(reprocesopunzonadoRequest $request)
    {
         $repun = new reprocesopunzonado;

        $repun->pOrilla_RePunzo = $request->pOrilla_RePunzo;
        $repun->pCentro_RePunzo = $request->pCentro_RePunzo;
        $repun->ppOrilla_RePunzo = $request->ppOrilla_RePunzo;
        $repun->pPromedio_RePunzo = $request->pPromedio_RePunzo;
        $repun->anchoU_RePunzo = $request->anchoU_RePunzo;
        $repun->apariencia_RePunzo = $request->apariencia_RePunzo;
        $repun->disposicion_RePunzo = $request->disposicion_RePunzo;
        $repun->fechaE_RePunzo = $request->fechaE_RePunzo;
        $repun->horaE_RePunzo = $request->horaE_RePunzo;
        $repun->analista_RePunzo = $request->analista_RePunzo;
        $repun->comentario_RePunzo = $request->comentario_RePunzo;
        $repun->id_PPunzo = $request->id_PPunzo;

        $repun->save();

        return redirect()->route('reprocesopunzonados.index')
                         ->with('info', 'los datos para del Re Proceso Punzonado fueron guardados');
    }

    ///

    public function edit($id_RePunzo)
    {
        $repun = reprocesopunzonado::find($id_RePunzo);
        return view('re-pun.edit', compact('repun'));
    }

    ///

    public function update(reprocesopunzonadoRequest $request, $id_RePunzo)
    {
        $repun = reprocesopunzonado::find($id_RePunzo);

        $repun->pOrilla_RePunzo = $request->pOrilla_RePunzo;
        $repun->pCentro_RePunzo = $request->pCentro_RePunzo;
        $repun->ppOrilla_RePunzo = $request->ppOrilla_RePunzo;
        $repun->pPromedio_RePunzo = $request->pPromedio_RePunzo;
        $repun->anchoU_RePunzo = $request->anchoU_RePunzo;
        $repun->apariencia_RePunzo = $request->apariencia_RePunzo;
        $repun->disposicion_RePunzo = $request->disposicion_RePunzo;
        $repun->fechaE_RePunzo = $request->fechaE_RePunzo;
        $repun->horaE_RePunzo = $request->horaE_RePunzo;
        $repun->analista_RePunzo = $request->analista_RePunzo;
        $repun->comentario_RePunzo = $request->comentario_RePunzo;
        $repun->id_PPunzo = $request->id_PPunzo;

        $repun->save();

        return redirect()->route('reprocesopunzonados.index')
        				 ->with('info', ' Los datos del Re Proceso Punzonado fueron actualizados');
    }
            
}
