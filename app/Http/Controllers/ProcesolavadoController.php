<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesolavado;
use App\Http\Requests\procesolavadoRequest;

class ProcesolavadoController extends Controller
{
     public function index()
    {
    	$procesolava = procesolavado::orderBy('id_PLav','DESC')->paginate();
    	return view('proceso-lav.index',compact('procesolava'));
    }

    ///

    public function destroy($id_PLav)
    {
    	$procesolav = procesolavado::find($id_PLav);
    	$procesolav->delete();

    	return back()->with('info', 'Los datos del proceso Lavado fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-lav.create');
    }

    ///

    public function store(procesolavadoRequest $request)
    {
         $procesolav = new procesolavado;

        $procesolav->pOrilla_PLav = $request->pOrilla_PLav;
        $procesolav->pCentro_PLav = $request->pCentro_PLav;
        $procesolav->ppOrilla_PLav = $request->ppOrilla_PLav;
        $procesolav->promedio_PLav = $request->promedio_PLav;
        $procesolav->anchoU_PLav = $request->anchoU_PLav;
        $procesolav->apariencia_PLav = $request->apariencia_PLav;
        $procesolav->disposicion_PLav = $request->disposicion_PLav;
        $procesolav->fechaE_PLav = $request->fechaE_PLav;
        $procesolav->horaE_PLav = $request->horaE_PLav;
        $procesolav->analista_PLav = $request->analista_PLav;
        $procesolav->comentario_PLav = $request->comentario_PLav;
        $procesolav->id_Ramas = $request->id_Ramas;

        $procesolav->save();

        return redirect()->route('procesolavados.index')
                         ->with('info', 'los datos para del Proceso Lavado fueron guardados');
    }

    ///

    public function edit($id_PLav)
    {
        $procesolav = procesolavado::find($id_PLav);
        return view('proceso-lav.edit', compact('procesolav'));
    }

    ///

    public function update(procesolavadoRequest $request, $id_PLav)
    {
        $procesolav = procesolavado::find($id_PLav);

        $procesolav->pOrilla_PLav = $request->pOrilla_PLav;
        $procesolav->pCentro_PLav = $request->pCentro_PLav;
        $procesolav->ppOrilla_PLav = $request->ppOrilla_PLav;
        $procesolav->promedio_PLav = $request->promedio_PLav;
        $procesolav->anchoU_PLav = $request->anchoU_PLav;
        $procesolav->apariencia_PLav = $request->apariencia_PLav;
        $procesolav->disposicion_PLav = $request->disposicion_PLav;
        $procesolav->fechaE_PLav = $request->fechaE_PLav;
        $procesolav->horaE_PLav = $request->horaE_PLav;
        $procesolav->analista_PLav = $request->analista_PLav;
        $procesolav->comentario_PLav = $request->comentario_PLav;
        $procesolav->id_Ramas = $request->id_Ramas;

        $procesolav->save();

        return redirect()->route('procesolavados.index')
                         ->with('info', ' Los datos del Proceso Lavado fueron actualizados');
    }
}
