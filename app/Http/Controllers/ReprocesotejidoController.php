<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesotejido;
use App\Http\Requests\reprocesotejidoRequest;

class ReprocesotejidoController extends Controller
{
    public function index()
    {
    	$retejidos = reprocesotejido::orderBy('id_ReTej','DESC')->paginate();
    	return view('re-tej.index',compact('retejidos'));
    }

    ///

    public function destroy($id_ReTej)
    {
    	$retejido = reprocesotejido::find($id_ReTej);
    	$retejido->delete();

    	return back()->with('info', 'Los datos del Re proceso Tejido fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-tej.create');
    }

    ///

    public function store(reprocesotejidoRequest $request)
    {
         $retejido = new reprocesotejido;

        $retejido->pOrilla_ReTej = $request->pOrilla_ReTej;
        $retejido->pCentro_ReTej = $request->pCentro_ReTej;
        $retejido->ppOrilla_ReTej = $request->ppOrilla_ReTej;
        $retejido->pPromedio_ReTej = $request->pPromedio_ReTej;
        $retejido->anchoU_ReTej = $request->anchoU_ReTej;
        $retejido->apariencia_ReTej = $request->apariencia_ReTej;
        $retejido->disposicion_ReTej = $request->disposicion_ReTej;
        $retejido->fechaE_ReTej = $request->fechaE_ReTej;
        $retejido->horaE_ReTej = $request->horaE_ReTej;
        $retejido->analista_ReTej = $request->analista_ReTej;
        $retejido->comentario_ReTej = $request->comentario_ReTej;
        $retejido->id_PTej = $request->id_PTej;

        $retejido->save();

        return redirect()->route('reprocesotejidos.index')
                         ->with('info', 'los datos para del Re proceso Tejido fueron guardados');
    }

    ///

    public function edit($id_ReTej)
    {
        $retejido = reprocesotejido::find($id_ReTej);
        return view('re-tej.edit', compact('retejido'));
    }

    ///

    public function update(reprocesotejidoRequest $request, $id_ReTej)
    {
        $retejido = reprocesotejido::find($id_ReTej);

        $retejido->pOrilla_ReTej = $request->pOrilla_ReTej;
        $retejido->pCentro_ReTej = $request->pCentro_ReTej;
        $retejido->ppOrilla_ReTej = $request->ppOrilla_ReTej;
        $retejido->pPromedio_ReTej = $request->pPromedio_ReTej;
        $retejido->anchoU_ReTej = $request->anchoU_ReTej;
        $retejido->apariencia_ReTej = $request->apariencia_ReTej;
        $retejido->disposicion_ReTej = $request->disposicion_ReTej;
        $retejido->fechaE_ReTej = $request->fechaE_ReTej;
        $retejido->horaE_ReTej = $request->horaE_ReTej;
        $retejido->analista_ReTej = $request->analista_ReTej;
        $retejido->comentario_ReTej = $request->comentario_ReTej;
        $retejido->id_PTej = $request->id_PTej;

        $retejido->save();

        return redirect()->route('reprocesotejidos.index')
                         ->with('info', ' Los datos del Re proceso Tejido fueron actualizados');
    }
}
