<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesolavado;
use App\Http\Requests\reprocesolavadoRequest;

class ReprocesolavadoController extends Controller
{
    public function index()
    {
    	$relava = reprocesolavado::orderBy('id_ReLav','DESC')->paginate();
    	return view('re-lav.index',compact('relava'));
    }

    ///

    public function destroy($id_ReLav)
    {
    	$relav = reprocesolavado::find($id_ReLav);
    	$relav->delete();

    	return back()->with('info', 'Los datos del Re proceso Lavado fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-lav.create');
    }

    ///

    public function store(reprocesolavadoRequest $request)
    {
         $relav = new reprocesolavado;

        $relav->pOrilla_ReLav = $request->pOrilla_ReLav;
        $relav->pCentro_ReLav = $request->pCentro_ReLav;
        $relav->ppOrilla_ReLav = $request->ppOrilla_ReLav;
        $relav->pPromedio_ReLav = $request->pPromedio_ReLav;
        $relav->anchoU_ReLav = $request->anchoU_ReLav;
        $relav->apariencia_ReLav = $request->apariencia_ReLav;
        $relav->disposicion_ReLav = $request->disposicion_ReLav;
        $relav->fechaE_ReLav = $request->fechaE_ReLav;
        $relav->horaE_ReLav = $request->horaE_ReLav;
        $relav->analista_ReLav = $request->analista_ReLav;
        $relav->comentario_ReLav = $request->comentario_ReLav;
        $relav->id_PLav = $request->id_PLav;

        $relav->save();

        return redirect()->route('reprocesolavados.index')
                         ->with('info', 'los datos para del Re proceso Lavado fueron guardados');
    }

    ///

    public function edit($id_ReLav)
    {
        $relav = reprocesolavado::find($id_ReLav);
        return view('re-lav.edit', compact('relav'));
    }

    ///

    public function update(reprocesolavadoRequest $request, $id_ReLav)
    {
        $relav = reprocesolavado::find($id_ReLav);

        $relav->pOrilla_ReLav = $request->pOrilla_ReLav;
        $relav->pCentro_ReLav = $request->pCentro_ReLav;
        $relav->ppOrilla_ReLav = $request->ppOrilla_ReLav;
        $relav->pPromedio_ReLav = $request->pPromedio_ReLav;
        $relav->anchoU_ReLav = $request->anchoU_ReLav;
        $relav->apariencia_ReLav = $request->apariencia_ReLav;
        $relav->disposicion_ReLav = $request->disposicion_ReLav;
        $relav->fechaE_ReLav = $request->fechaE_ReLav;
        $relav->horaE_ReLav = $request->horaE_ReLav;
        $relav->analista_ReLav = $request->analista_ReLav;
        $relav->comentario_ReLav = $request->comentario_ReLav;
        $relav->id_PLav = $request->id_PLav;

        $relav->save();

        return redirect()->route('reprocesolavados.index')
                         ->with('info', ' Los datos del Re proceso Lavado fueron actualizados');
    }
}
