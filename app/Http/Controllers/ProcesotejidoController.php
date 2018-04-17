<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\procesotejido;
use App\Http\Requests\procesotejidoRequest;

class ProcesotejidoController extends Controller
{
    public function index()
    {
    	$procesoteji = procesotejido::orderBy('id_PTej','DESC')->paginate();
    	return view('proceso-tej.index',compact('procesoteji'));
    }

    ///

    public function destroy($id_PTej)
    {
    	$procesotej = procesotejido::find($id_PTej);
    	$procesotej->delete();

    	return back()->with('info', 'Los datos del proceso Tejido fueron eliminados');
    }

    ///

    public function create()
    {
        return view('proceso-tej.index');
    }

    ///

    public function store(procesotejidoRequest $request)
    {
         $procesotej = new procesotejido;

        $procesotej->pOrilla_PTej = $request->pOrilla_PTej;
        $procesotej->pCentro_PTej = $request->pCentro_PTej;
        $procesotej->ppOrilla_PTej = $request->ppOrilla_PTej;
        $procesotej->promedio_PTej = $request->promedio_PTej;
        $procesotej->anchoU_PTej = $request->anchoU_PTej;
        $procesotej->apariencia_PTej = $request->apariencia_PTej;
        $procesotej->disposicion_PTej = $request->disposicion_PTej;
        $procesotej->fechaE_PTej = $request->fechaE_PTej;
        $procesotej->horaE_PTej = $request->horaE_PTej;
        $procesotej->analista_PTej = $request->analista_PTej;
        $procesotej->comentario_PTej = $request->comentario_PTej;
        $procesotej->id_Procesos = $request->id_Procesos;

        $procesotej->save();

        return redirect()->route('procesotejidos.index')
                         ->with('info', 'los datos para del Proceso Tejido fueron guardados');
    }

    ///

    public function edit($id_PTej)
    {
        $procesotej = procesotejido::find($id_PTej);
        return view('proceso-tej.edit', compact('procesotej'));
    }

    ///

    public function update(procesotejidoRequest $request, $id_PTej)
    {
        $procesotej = procesotejido::find($id_PTej);

        $procesotej->pOrilla_PTej = $request->pOrilla_PTej;
        $procesotej->pCentro_PTej = $request->pCentro_PTej;
        $procesotej->ppOrilla_PTej = $request->ppOrilla_PTej;
        $procesotej->promedio_PTej = $request->promedio_PTej;
        $procesotej->anchoU_PTej = $request->anchoU_PTej;
        $procesotej->apariencia_PTej = $request->apariencia_PTej;
        $procesotej->disposicion_PTej = $request->disposicion_PTej;
        $procesotej->fechaE_PTej = $request->fechaE_PTej;
        $procesotej->horaE_PTej = $request->horaE_PTej;
        $procesotej->analista_PTej = $request->analista_PTej;
        $procesotej->comentario_PTej = $request->comentario_PTej;
        $procesotej->id_Procesos = $request->id_Procesos;

        $procesotej->save();

        return redirect()->route('procesotejidos.index')
                         ->with('info', ' Los datos del Proceso Tejido fueron actualizados');
    }
}
