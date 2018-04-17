<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reprocesobondeo;
use App\Http\Requests\reprocesobondeoRequest;

class ReprocesobondeoController extends Controller
{
    public function index()
    {
    	$rebonde = reprocesobondeo::orderBy('id_ReBondeo','DESC')->paginate();
    	return view('re-bon.index',compact('rebonde'));
    }

    ///

    public function destroy($id_ReBondeo)
    {
    	$rebon = reprocesobondeo::find($id_ReBondeo);
    	$rebon->delete();

    	return back()->with('info', 'Los datos del Re proceso Bondeo fueron eliminados');
    }

    ///

    public function create()
    {
        return view('re-bon.create');
    }

    ///

    public function store(reprocesobondeoRequest $request)
    {
         $rebon = new reprocesobondeo;

        $rebon->peso1_ReBondeo = $request->peso1_ReBondeo;
        $rebon->peso2_ReBondeo = $request->peso2_ReBondeo;
        $rebon->peso3_ReBondeo = $request->peso3_ReBondeo;
        $rebon->pesoProm_ReBondeo = $request->pesoProm_ReBondeo;
        $rebon->espesor1_ReBondeo = $request->espesor1_ReBondeo;
        $rebon->espesor2_ReBondeo = $request->espesor2_ReBondeo;
        $rebon->espesor3_ReBondeo = $request->espesor3_ReBondeo;
        $rebon->espesorProm_ReBondeo = $request->espesorProm_ReBondeo;
        $rebon->anchoUtil_ReBondeo = $request->anchoUtil_ReBondeo;
        $rebon->adhesionWTU_ReBondeo = $request->adhesionWTU_ReBondeo;
        $rebon->adhesionFTU_ReBondeo = $request->adhesionFTU_ReBondeo;
        $rebon->adhesionWUS_ReBondeo = $request->adhesionWUS_ReBondeo;
        $rebon->adhesionFUS_ReBondeo = $request->adhesionFUS_ReBondeo;
        $rebon->elongacionW_ReBondeo = $request->elongacionW_ReBondeo;
        $rebon->elongacionF_ReBondeo = $request->elongacionF_ReBondeo;
        $rebon->distanciaW_ReBondeo = $request->distanciaW_ReBondeo;
        $rebon->tiempoW_ReBondeo = $request->tiempoW_ReBondeo;
        $rebon->velocidadW_ReBondeo = $request->velocidadW_ReBondeo;
        $rebon->distanciaF_ReBondeo = $request->distanciaF_ReBondeo;
        $rebon->tiempoF_ReBondeo = $request->tiempoF_ReBondeo;
        $rebon->velocidadF_ReBondeo = $request->velocidadF_ReBondeo;
        $rebon->apariencia_ReBondeo = $request->apariencia_ReBondeo;
        $rebon->tono_ReBondeo = $request->tono_ReBondeo;
        $rebon->recuperacionW_ReBondeo = $request->recuperacionW_ReBondeo;
        $rebon->recuperacionF_ReBondeo = $request->recuperacionF_ReBondeo;
        $rebon->lecColorDL_ReBondeo = $request->lecColorDL_ReBondeo;
        $rebon->lecColorDA_ReBondeo = $request->lecColorDA_ReBondeo;
        $rebon->lecColorDB_ReBondeo = $request->lecColorDB_ReBondeo;
        $rebon->disposicion_ReBondeo = $request->disposicion_ReBondeo;
        $rebon->fechaE_ReBondeo = $request->fechaE_ReBondeo;
        $rebon->horaE_ReBondeo = $request->horaE_ReBondeo;
        $rebon->analista_ReBondeo = $request->analista_ReBondeo;
        $rebon->comentario_ReBondeo = $request->comentario_ReBondeo;
        $rebon->id_PBondeo = $request->id_PBondeo;

        $rebon->save();

        return redirect()->route('reprocesobondeos.index')
                         ->with('info', 'los datos para del Re Proceso Bondeo fueron guardados');
    }

    ///

    public function edit($id_ReBondeo)
    {
        $rebon = reprocesobondeo::find($id_ReBondeo);
        return view('re-bon.edit', compact('rebon'));
    }

    ///

    public function update(reprocesobondeoRequest $request, $id_ReBondeo)
    {
        $rebon = reprocesobondeo::find($id_ReBondeo);

        $rebon->peso1_ReBondeo = $request->peso1_ReBondeo;
        $rebon->peso2_ReBondeo = $request->peso2_ReBondeo;
        $rebon->peso3_ReBondeo = $request->peso3_ReBondeo;
        $rebon->pesoProm_ReBondeo = $request->pesoProm_ReBondeo;
        $rebon->espesor1_ReBondeo = $request->espesor1_ReBondeo;
        $rebon->espesor2_ReBondeo = $request->espesor2_ReBondeo;
        $rebon->espesor3_ReBondeo = $request->espesor3_ReBondeo;
        $rebon->espesorProm_ReBondeo = $request->espesorProm_ReBondeo;
        $rebon->anchoUtil_ReBondeo = $request->anchoUtil_ReBondeo;
        $rebon->adhesionWTU_ReBondeo = $request->adhesionWTU_ReBondeo;
        $rebon->adhesionFTU_ReBondeo = $request->adhesionFTU_ReBondeo;
        $rebon->adhesionWUS_ReBondeo = $request->adhesionWUS_ReBondeo;
        $rebon->adhesionFUS_ReBondeo = $request->adhesionFUS_ReBondeo;
        $rebon->elongacionW_ReBondeo = $request->elongacionW_ReBondeo;
        $rebon->elongacionF_ReBondeo = $request->elongacionF_ReBondeo;
        $rebon->distanciaW_ReBondeo = $request->distanciaW_ReBondeo;
        $rebon->tiempoW_ReBondeo = $request->tiempoW_ReBondeo;
        $rebon->velocidadW_ReBondeo = $request->velocidadW_ReBondeo;
        $rebon->distanciaF_ReBondeo = $request->distanciaF_ReBondeo;
        $rebon->tiempoF_ReBondeo = $request->tiempoF_ReBondeo;
        $rebon->velocidadF_ReBondeo = $request->velocidadF_ReBondeo;
        $rebon->apariencia_ReBondeo = $request->apariencia_ReBondeo;
        $rebon->tono_ReBondeo = $request->tono_ReBondeo;
        $rebon->recuperacionW_ReBondeo = $request->recuperacionW_ReBondeo;
        $rebon->recuperacionF_ReBondeo = $request->recuperacionF_ReBondeo;
        $rebon->lecColorDL_ReBondeo = $request->lecColorDL_ReBondeo;
        $rebon->lecColorDA_ReBondeo = $request->lecColorDA_ReBondeo;
        $rebon->lecColorDB_ReBondeo = $request->lecColorDB_ReBondeo;
        $rebon->disposicion_ReBondeo = $request->disposicion_ReBondeo;
        $rebon->fechaE_ReBondeo = $request->fechaE_ReBondeo;
        $rebon->horaE_ReBondeo = $request->horaE_ReBondeo;
        $rebon->analista_ReBondeo = $request->analista_ReBondeo;
        $rebon->comentario_ReBondeo = $request->comentario_ReBondeo;
        $rebon->id_PBondeo = $request->id_PBondeo;

        $rebon->save();

        return redirect()->route('reprocesobondeos.index')
                         ->with('info', ' Los datos del Re Proceso Bondeo fueron actualizados');
    }
}
